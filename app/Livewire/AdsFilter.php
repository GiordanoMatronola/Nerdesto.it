<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Announcement;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdsFilter extends Component
{
    use WithPagination;
    
    public $searchByWord= '';
    public $searchByPrice= '';
    public $searchByCountry='0';
    public $searchByCategory=[];
    public $users;


    

    public function render()
    {
        $announcements = Announcement::where('is_accepted', true);
        if($this->searchByWord){
            $announcements->whereAny(['title', 'body'],'like','%'.$this->searchByWord.'%');
        }
        if($this->searchByPrice){
            $float=(float)$this->searchByPrice;
            $announcements->where('price','<=',$float);
        }
        if($this->searchByCategory){
            $categories=(array)$this->searchByCategory;
            $announcements->whereIn('category_id',$categories);
        }
        // if ($this->searchByCountry != 0) {
        //     $announcements = $announcements->join('users', 'announcements.user_id', '=', 'users.id')
        //         ->select("announcements.user_id", "users.country")
        //         ->where("users.country", "=", $this->searchByCountry);
        // }
        if ($this->searchByCountry != 0) {
            $announcements = $announcements->join('users', 'announcements.user_id', '=', 'users.id')
                ->select("announcements.*")
                ->where("users.country", "=", $this->searchByCountry);
        }
        $announcements->orderBy('announcements.created_at', 'desc');
        return view('livewire.ads-filter', ['announcements'=>$announcements->paginate(6), 'price'=>$this->searchByPrice]);
    }

    public function searchByFilter(){

    }
}
