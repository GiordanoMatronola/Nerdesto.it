<?php

namespace App\Livewire\Homepage;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\Attributes\On; 
use Illuminate\Http\Request;

class Dashboardhomepage extends Component
{
    //attributo che raccoglie la categoria in entrata se si attiva la funzione
    public $filter='';
    //attributo che si attiva solo a premere gli ultimi annunci (non essendo una categoria ufficiale)
    public $last=true;
    //attributo che si attiva alla ricerca
    public $search='';

    
    public function render()
    {
        if($this->search){
            //recupero la request
            $request=$this->search;
            //creo gli annunci in base alla ricerca
            $announcements = Announcement::search($request)->where('is_accepted', true)->get();
            return view('livewire.homepage.dashboardhomepage', compact('announcements','request'));
        } else if($this->last){
        //se non c'è una categoria selezionata si mostra gli ultimi annunci
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->get()->take(6);
        return view('livewire.homepage.dashboardhomepage', compact('announcements'));
        } else if($this->filter){
            //creo una variabile per portare il titolo della categoria
            $category=$this->filter;
            //mostro solo gli annunci della categoria attualmente selezionata e che siano stati revisionati
            $announcements=$category->announcements->where('is_accepted', true)->sortByDesc('created_at')->take(10);
            //svuoto l'attributo della categoria
            $this->filter='';
            return view('livewire.homepage.dashboardhomepage', compact('announcements','category'));
        }
    }
        
    

    //funzione che si attiva al premere la categoria nel componente bar
    public function filtercategory(Category $category){
        //copio la categoria in entrata e la inserisco in filter
        $this->filter=$category;
        //disattivo gli ultimi annunci poichè c'è la categoria in corso
        $this->last=false;
        //svuoto barra di ricerca
        $this->search='';
        //si riattiva render
    }

    //funzione che si attiva a premere ultimi annunci
    public function news(){
        $this->last=true;
        $this->filter='';        
    }
}
