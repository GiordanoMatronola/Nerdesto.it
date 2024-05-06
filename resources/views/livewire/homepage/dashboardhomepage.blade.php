<div>
    <div class="nav nav-tabs prova justify-content-around">
        <ul class="nav col-12 col-md-10">
            <li class="nav-item">
                <span  class="nav-link cursor" wire:click='news' aria-current="page">{{__('ui.lastAnnounce')}}</span>
            </li>
            @foreach (app\models\Category::all() as $category)
            <li class="nav-item">
                <span class="nav-link cursor" aria-current="page" wire:click='filtercategory({{$category->id}})'>{{$category->name}}</span>
            </li>
            @endforeach
        </ul>
        <div class="nav-item col-12 col-md-2">
            <form class="d-flex p-0 mb-0">
                <input wire:model.live="search" class="form-control mr-sm-2 " placeholder="{{__('ui.search')}}" aria-label="Search">
                <button class="btn btn-outline-secondary custom-link mx-1" type="button" style="height: 44px;"><i class="fa-search fa-solid"></i></button>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($announcements as $announcement)
                <x-card :announcement='$announcement'/>
            @endforeach
        </div>
    </div>
</div>
