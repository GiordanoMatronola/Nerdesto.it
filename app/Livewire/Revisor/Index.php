<?php

namespace App\Livewire\Revisor;

use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\On; 

class Index extends Component
{

    
    //Collegato al componente che mostra gli annunci
    #[On('refresh')]
    public function render()
    {
        //funzione che riporta alla vista del componente che mostra tutti gli annunci da revisionare
        $announcementsToCheck = Announcement::where('is_accepted', null)->orderBy('updated_at','asc')->get();
        return view('livewire.revisor.index', compact('announcementsToCheck'));
    }

    //collega i due componenti per mostrare il singolo annuncio
    public function showAnnouncement(Announcement $announcement){
        $this->dispatch('show', announcement:$announcement)->to('revisor.board');

    }
}
