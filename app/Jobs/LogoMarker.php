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

class LogoMarker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;
    private $fileName; // Nome del nostro file didid
    private $path; // Path dove prendere l'immagine

    public function __construct($announcement_image_id, $filePath)
    {
        $this->announcement_image_id = $announcement_image_id;
        $this->path = dirname($filePath); 
        $this->fileName = basename($filePath); 

        
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
        $srcPath=storage_path() . '/app/public/' . $this->path . "/crop_600x500_" . $this->fileName;
        $image = file_get_contents($srcPath);

        //andiamo poi ad aggiungere l'immagine e l'andiamo a modificare con spatie image 
        $image = SpatieImage::load($srcPath);

        //andiamo a recuperare e posizionaree il watermarket 
        $image->watermark(base_path('public/Nerdestologo.png'))->watermarkPosition(Manipulations::POSITION_BOTTOM)->watermarkOpacity(80);
        //salviamo l'immagine
        $image->save($srcPath);
    }
}