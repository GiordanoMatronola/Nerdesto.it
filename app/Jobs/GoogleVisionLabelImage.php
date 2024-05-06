<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $announcement_image_id;

    // nella funzione construct, l'api di google ha bisogno solo dell'id dell'annuncio
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */

    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        
        // verifico che esista effettivamente l'immagine, altrimenti arresto il job
        if(!$i){
            return;
        }

        // recupero il contenuto dell'immagine, recuperandola concatenando app/public/ con il percorso di ogni singola img
        $image = file_get_contents(storage_path('app/public/'. $i->path));

        // il json di credenziali di google è troppo lungo, motivo per cui lo creo come file separato e lo putto nell'env
        putenv('GOOGLE_APPLICATION_CREDENTIALS='. base_path('google_credential.json'));

        // avvio una nuova istanza di ImageAnnotatorClient
        $imageAnnotator = new ImageAnnotatorClient();
        // richiedo la label detection per l'immagine che ho recuperato
        $response = $imageAnnotator->labelDetection($image);
        // richiedo le annotazioni della label
        $labels = $response->getLabelAnnotations();

        // ottengo delle labels???
        if($labels)
        {
            // mi creo un array dove salvare i risultati delle descrizioni dell'immagine
            $results = [];
            foreach ($labels as $label)
            {
                // la label annotation restituisce più valori, io ho bisogno solo delle descrizioni ->getDescription()
                
                $results[] = $label->getDescription();
                
                // N.B. per poter salvare il valore appena ottenuto come array, in un campo che in realtà è una stringa, devo fare un CASTING del campo, ossia modificare il tipo di variabile; quusta operazione è da eseguire nel model dell'entity
            }

            // valorizzo il campo con il valore appena ottenuto
            $i->labels = $results;
            // salvo l'immagine
            $i->save();
        }

        //a fine job chiudo l'istanza di ImageAnnotatorClient
        
        $imageAnnotator->close();

    }
}
