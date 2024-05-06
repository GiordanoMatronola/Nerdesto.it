<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // catturiamo l'immagine e l'andiamo a recuperare nello store
        $i= Image::find($this->announcement_image_id);
        if(!$i){ // se non esiste l'immagine terminiamo l'esecuzione 
            return;
        }
        // recuperiamo il file ( e non il campo nel database)
        $image = file_get_contents(storage_path('app/public/'.$i->path));

        // impostiamo le variabili d'ambiente che contengono le credenziali per accedere al servizio google
        //con la funzione putenv lo aggiunggiamo all'env 
        putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path('google_credential.json'));

        //avviamo imageAnnotatorClient classe installata da google 
        $imageAnnotator= new ImageAnnotatorClient();
        // avviamo la funzione safeSearchDetection sull'immagine
        $response= $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close(); // chiudiamo poi il collegamento con google vision 

        //recuperiamo la response della safeSerarchDetection che conterrà la risposta sui campi dei semafori
        $safe= $response->getSafeSearchAnnotation();

        // e andiamo a salvare ognuno di questi valori all'interno di variabili parlanti

        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        //andiamo a creare un dizionario che serve per identificare la classe aggiunta, sono sei voti possibili (0 = semaforo grigio, 1=verde ecc.)
        $likelihoodName = [
            'text-secondary fa-solid fa-circle', 'text-success fa-solid fa-circle', 'text-success fa-solid fa-circle', 'text-warning fa-solid fa-circle', 'text-warning fa-solid fa-circle', 'text-danger fa-solid fa-circle',
        ];

        // andiamo a salvare ognuna di queste etichette 
        $i->adult = $likelihoodName[$adult]; 
        $i->medical = $likelihoodName[$medical]; 
        $i->spoof = $likelihoodName[$spoof]; 
        $i->violence = $likelihoodName[$violence]; 
        $i->racy = $likelihoodName[$racy]; 
        
        // salviamo all'interno del database 
        $i->save();
        
        
        
    }
}
