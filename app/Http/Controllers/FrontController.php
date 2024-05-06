<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditProfiloRequest;

class FrontController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function categoryShow(Category $category){
        
        return view ('categoryShow', compact('category'));
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view ('announcements.index', compact('announcements'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function formRevisor() {
        return view('revisor.formRevisore');
    }

    public function tuoProfilo() {
        $user=user::where('id','=',Auth::user()->id)->first();
        return view('tuoProfilo',compact('user'));
    }

    public function tuoProfiloEdit(){
        $user=user::where('id','=',Auth::user()->id)->first();
        return view ('tuoProfiloEdit', compact('user'));
    }

    public function tuoProfiloUpdate(EditProfiloRequest $request, User $user)
    {
        $user=user::where('id','=',Auth::user()->id)->first();
        $user->update([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'birthdate'=>$request->input('birthdate'),
            'genre'=>$request->input('genre'),
            'telephone'=>$request->input('telephone'),
            'address'=>$request->input('address'),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),
            'username'=>$request->input('username'),
        ]);

        return redirect('tuoProfilo')->with(['success'=>'Profilo modificato correttamente']);
    }

    public function profiloUtente ($username) {
        $user=User::where('username','=', $username)->first();
        return view('userProfile', compact('user'));
    }

    public function delivery() {
        return view('delivery');
    }
}    