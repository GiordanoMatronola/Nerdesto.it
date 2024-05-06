<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    
    public function dashboard(){
        return view('revisor.dashboard');
    }
    
    public function requestSent()
    {
        $user = auth()->user();
        $user->request_sent = true;
        $user->save();
    }
    
    public function becomeRevisor( Request $request){
        
        $aboutYou = $request->input('aboutYou');
        
        // richiamo la chiave dell'array che contiene le traduzioni, il sistema riconosce la lang dalla sessione. lo passo all''interno del with()
        $request_already_sent = __('ui.requestAlreadySent');
        $request_sent = __('ui.requestSent');
        $request_empty = __('ui.request_empty');
        
        if(auth()->user()->request_sent)
        {
            return redirect('/')->with('requestAlreadySent', $request_already_sent);

        }else if (!auth()->user()->request_sent && !$aboutYou){
            return redirect()->back()->with('request_empty', $request_empty);

        }
        else {
            //funzione che invia un email all'indirizzo dell'admin da l'indirizzo dell'utente con mail apposita di classe BecomeRevisor
            Mail::to('admin@nerdesto.it')->send(new BecomeRevisor(Auth::user(), $aboutYou));
            $user = auth()->user();
            $user->request_sent = true;
            $user->save();
            return redirect('/')->with('requestSent', $request_sent);
        }
    }
    
    public function makeRevisor(User $user){
        
        $revisor_accept = __('ui.revisorAccept');

        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        $userRevisor=$user->username;
        return redirect('/')->with('RevisorAccept', "$revisor_accept : $userRevisor");
    }
}
