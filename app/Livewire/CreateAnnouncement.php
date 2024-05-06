<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\LogoMarker;
use App\Models\Category;

use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CreateAnnouncement extends Component
{

    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category_id;
    public $temporary_images;
    public $images= [];
    public $announcement;

    protected $rules = [
        'title'=>'required|min:3',
        'body'=>'required|min:8',
        'price'=>'required|numeric',
        'category_id'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',
    ];

    protected $message = [
        'required'=>'Il campo è obbligatorio',
        'min'=>'Il campo è troppo corto',
        'numeric'=>'Il campo deve essere un numero',
        'temporary_images.*.image'=> 'I file devono essere immagini',
        'temporary_images.*.'=> 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine deve essere di massimo 1 mb',
        'images.image'=> 'L\'immagine dev\'essere un\'immagine',
        'images.max'=> 'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store(){
        
        $this->validate();

        // $this->announcement= Category::find($this->category_id)->announcements()->create($this->validate());
        // $this->announcement->user()->associate(Auht::user());
        // if(count($this->images)){
        //     foreach($this->images as $image){
        //     $this->announcement->images()->create(['path'=> $image->store('images', 'public')]);
        //     }
        // }
        // $this->announcement->save();

        //prendiamo la categoria che viene inserita e cerchiamo tra quelle esistenti
        $category = Category::find($this->category_id); //riga 35

    
        //la categoria che ho trovato sopra alla riga 35, ne recupero il nome utilizzando la n:1 $category->announcements(). poichè devo fare lo stesso anche con gli user, il risultato lo salvo in una nuova var----- riga 38
        $this->announcement = $category->announcements()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
            'user_id'=>Auth::user()->id,
        ]);
        if(count($this->images)){
            foreach($this->images as $image){
            // $this->announcement->images()->create(['path'=> $image->store('images', 'public')]); <-non serve più
            $newFileName= "announcements/{$this->announcement->id}"; // salviamo le immagini in una cartella announcement e per ogni articolo in una cartella id di quell'articolo
            $newImage= $this->announcement->images()->create(['path'=> $image->store($newFileName, 'public')]);

            //inseriamo una job chain (catena di job) poichè prima di essere fatto il resize deve già contenere il watermarket
            
            // GoogleVisionSafeSearch::withChain([
            //     new ResizeImage($newImage->path,600,500),
            //     new LogoMarker($newImage->id),
            //     new GoogleVisionLabelImage($newImage->id),
            //     new RemoveFaces($newImage->id),
            // ])->dispatch($newImage->id);;
        

            RemoveFaces::withChain([
                new ResizeImage($newImage->path,600,500),
                new GoogleVisionSafeSearch($newImage->id),
                new GoogleVisionLabelImage($newImage->id),
                new LogoMarker($newImage->id, $newImage->path,600,500),
            ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }


        //recupero l'utente loggato e lo collego all'annuncio appena creato alla riga 38
        // Auth::user()->announcements()->save($announcement);
        $productInsert= __('ui.ProductInsert');
        session()->flash('ProductInsert', "$productInsert");
        $this->cleanForm();
    }
    
    public function cleanForm(){
        $this->title= '';
        $this->body= '';
        $this->price= '';
        $this->category_id= '';
        $this->temporary_images= [];
        $this->images=[];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function render()
    {
        return view('livewire.create-announcement');
    }
    
}
