<x-layout>
    <div style="height: 200px"></div>
    <div class="row justify-content-center">
        <div class="profile-card">
            <div class="divImageProfile">
                <img src="http://127.0.0.1:8000/ghali.jpg" alt="" class="imgProfile">
            </div>
            <div class="text-data">
                <span class="username">{{$user->username}}</span>
                <span class="name">{{$user->firstname}} {{$user->lastname}}</span>
            </div>
            <button class="message-button my-3">
                <a href="" class="my-3 elegant-font text-decoration-none"><i class="fa-solid fa-message mx-1"></i> {{__('ui.message')}}</a>
            </button>
            <div class="review">
                <p class="member">{{__('ui.memberSince')}} {{$user->created_at}}</p>
                <div class="rating">
                    <p class="rewier">{{__('ui.seller')}}
                        <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i> 
                    </p>                    
                </div>
            </div>
        </div>
    </div>
    <h2 class="display-2 text-center my-5">{{__('ui.itemsForSale')}} </h1>
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($user->announcements as $announcement)
                <x-card :announcement='$announcement'/>
            @endforeach
        </div>
    </div>
</x-layout>