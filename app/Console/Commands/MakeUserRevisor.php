<?php

// classe del comando che l'admin va a lanciare per rendere l'utente revisore, questo comando poi lo andremo a catturare e 
//a inserire in un metodo che si attiverà dall'email

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *

     */
    protected $signature = 'presto:makeUserRevisor {email}'; //indica come lanciare il comando

    /**
     * The console command description.
     *

     */
    protected $description = 'Rendi un utente revisore'; // descrizione comando

    /**
     * Execute the console command.
     */
    public function handle() 
    {
        // andiamo a identificare l'utente tramite l'email che ci è stata fornita
        $user = User::where('email', $this->argument('email'))->first();
        // se l'utente non esiste ritorniamo con errore
        if(!$user){
            $this->error('Utente non trovato');
            return;
        }
        //altrimenti cambiamo il valore del campo is_revisor a true e salviamo, comunicando il successo
        else{ 
            $user->is_revisor = true;
            $user->save();
            $this->info("L'utente {$user->username} è ora un revisore.");
        }
    }
}

// comando per creare un comando: 
//php artisan make:command "nome"
//comando per vedere la lista dei comandi di artisan:
//php artisan 