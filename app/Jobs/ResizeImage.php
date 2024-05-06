<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Manipulations;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName; // Nome del nostro file
    private $path; // Path dove prendere l'immagine

    public function __construct($filePath, $w, $h) // FilePath è il posto dove andare a salvare l'immagine una volta croppata, da li si prende il path e il nome del file
    {
        $this->w = $w;
        $this->h = $h;
        $this->path = dirname($filePath); //dirname è una funzione php che data una stringa contenente il percorso di un file, questa funzione restituirà il nome della directory. 
        $this->fileName = basename($filePath); // basename è una funzione php che Data una stringa contenente il percorso di un file, questa funzione restituisce il nome del file
    }

    /**
     * Execute the job.
     */
    public function handle(): void // andiamo a stanziare variabili 
    {
        $w= $this->w;
        $h= $this->h;
        // creiamo due variabili che conterranno il path da dove prendere la nostra immagine e il path dove salvarla una volta croppata
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName; // storage_path() restituisce il percorso per arrivare allo storage
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        $croppedImage= Image::load($srcPath)->crop(Manipulations::CROP_CENTER, $w,$h)->save($destPath);

    }
}
