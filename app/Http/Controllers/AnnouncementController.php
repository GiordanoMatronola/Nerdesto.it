<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
        return view('announcements.create');
    }

    public function showAnnouncement(Announcement $announcement){
        
        return view ('announcements.show', compact('announcement'));
    }

    public function indexAnnouncement(Announcement $announcement){
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view ('announcements.index', compact('announcements'));
    }

    // public function prova(Announcement $announcement){
    //     $announcement->setAccepted(null);
    //     $this->indexAnnouncement();
    //     return view('announcements.index', compact('announcements'));
    // }

} 
