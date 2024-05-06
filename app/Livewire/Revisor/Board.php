<?php

namespace App\Livewire\Revisor;

use App\Models\User;
use App\Mail\AlertUser;
use Livewire\Component;
use App\Models\Announcement;
use Livewire\Attributes\On; 
use Illuminate\Support\Facades\Mail;

class Board extends Component
{
    //attributi da mostrare con il render
    public $announcementToCheck='';
    public $textAlertUser;



    public function render()
    {
        // se l'attributo announcementToCheck contiene un annuncio da mostrare lo mostra
        if($this->announcementToCheck){
            $announcement=$this->announcementToCheck;
            return view('livewire.revisor.board', compact('announcement'));
        }else{ //altrimenti mostra l'attributo none con il messaggio al suo interno
            return view('livewire.revisor.board');
        }
    }

    //funzione legata all'altro componente che riceve l'annuncio da mostrare
    #[On('show')]
    public function show(Announcement $announcement){
        $this->announcementToCheck=$announcement;
    }

    //funzione che modifica il campo accepted_it dell'annuncio in true al premere del pulsantino accetta
    public function acceptAnnouncement(Announcement $announcement){
        $adsAccept= __('ui.adsAccept');
        //funzione del modello announcement che chiede il parametro in entrata e lo modifica
        $announcement->setAccepted(true);
        //funzione che collega il componente index e lo fa refreshare al completamento di revisione
        $this->dispatch('refresh')->to('revisor.index');
        //svuoto l'attributo così che sparisca l'annuncio una volta revisionato
        $this->announcementToCheck='';
        //mando il messaggio di sessione
        session()->flash("adsAccept", $adsAccept);

    }

    //stessa cosa qui sotto ma per il false
    public function rejectAnnouncement(Announcement $announcement){
        $adsReject=__('ui.adsReject');
        $announcement->setAccepted(false);
        $this->dispatch('refresh')->to('revisor.index');
        $this->announcementToCheck='';
        session()->flash("adsReject", "$adsReject");
    }

    public function tryagain(Announcement $announcement){
        $announcement->setAccepted(null);
        $this->dispatch('refresh')->to('revisor.index');
    }

    public function AlertUser(){
            $announcement=Announcement::whereNotNull('is_accepted')->get()->last();
        if($this->textAlertUser){
            $user_id= Announcement::whereNotNull('is_accepted')->get()->last()->user_id;
            $title=Announcement::whereNotNull('is_accepted')->get()->last()->title;
            $user= User::find($user_id);
            Mail::to($user->email)->send(new AlertUser($user->firstname, $user->lastname, $title, $this->textAlertUser));
        }else{
            $announcement->setAccepted(null);
            $this->dispatch('refresh')->to('revisor.index');
        }
        $this->textAlertUser= '';
        // return redirect('views.revisor.dashboard')->with('noAlertInsert', 'Non hai inserito nessuna motivazione, non puoi rifiutarlo');
    }
}
