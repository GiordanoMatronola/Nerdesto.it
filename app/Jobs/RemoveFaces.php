<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id=$announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i= Image::find($this->announcement_image_id);
        if(!$i){
            return;
        }

        // recupero il contenuto dell'immagine, recuperandola concatenando app/public/ con il percorso di ogni singola img
        $srcPath=storage_path('app/public/'. $i->path);
        $image = file_get_contents($srcPath);

        // il json di credenziali di google è troppo lungo, motivo per cui lo creo come file separato e lo putto nell'env
        putenv('GOOGLE_APPLICATION_CREDENTIALS='. base_path('google_credential.json'));

        // avvio una nuova istanza di ImageAnnotatorClient
        $imageAnnotator = new ImageAnnotatorClient();
        // richiamo la funzione face detection per l'immagine che ho recuperato
        $response = $imageAnnotator->faceDetection($image);
        // salvo in una variabile le annotazioni di dove si trovano i volti rilevati 
        $faces = $response->getFaceAnnotations();

        //per ogni faccia che l'IA di google ha trovato, prendiamo i vartici (gli angoli del quadrato che contiene il viso)
        foreach ($faces as $face){
            $vertices = $face->getBoundingPoly()->getVertices();
            //creiamo un array che contenga le coppie d'angoli che rapprensenteranno le coordinate del quadrato che circonda il volto
            $bounds= [];
            foreach($vertices as $vertex){
                //ogni vertice sarà composto da quattro angoli, a noii ci interessano quelli sull'asse x e sull'asse y
                $bounds[]= [$vertex->getX(), $vertex->getY()];
            }
        

        // per avere la larghezza e la lunghezza del viso, andremo a fare la differenza tra gli angoli
        $w= $bounds[2][0] - $bounds[0][0];
        $h=$bounds[2][1] - $bounds[0][1];

        //andiamo poi ad aggiungere l'immagine e l'andiamo a modificare con spatie image 
        $image = SpatieImage::load($srcPath);

        //andiamo a recuperare e posizionaree il watermarket 
        $image->watermark(base_path('public/chew.png'))
            ->watermarkPosition('top-left')
            ->watermarkPadding($bounds[0][0], $bounds[0][1])
            //larghezza e altezza del watermarket in base alla dimensione della faccia
            ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
            ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
            ->watermarkFit(Manipulations::FIT_STRETCH);
        
            //salviamo l'immagine
            $image->save($srcPath);
        }   

        $imageAnnotator->close();
    }
}