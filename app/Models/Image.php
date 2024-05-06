<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable= ['path'];

    // per l'utilizzo delle google API ho bisogno di salvare i valori delle labels in un array, faccio quindi il casting della variabile labels
    protected $casts = [
        'labels' => 'array'
    ];

    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }

    public static function getUrlByFilePath($filePath, $w=null, $h=null){
        if(!$w && !$h){
            return Storage::url($filePath);
        } else {
            $path= dirname($filePath);
            $filename= basename($filePath);
            $file="{$path}/crop_{$w}x{$h}_{$filename}";
        }
        return Storage::url($file);

    }

    public function getUrl($w=null, $h=null){
        return Image::getUrlByFilePath($this->path, $w, $h);
    }
}
