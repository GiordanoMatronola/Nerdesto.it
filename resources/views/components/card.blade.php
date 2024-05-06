<div class="col-12 col-md-4 my-4 mx-auto d-flex justify-content-center">
    <div class="card welcome-card border-0 shadow-sm">
        <img src="{{$announcement->images()->get()->isNotEmpty() ? $announcement->images()->first()->getUrl(600,500) : "https://picsum.photos/200"}}" class="card-img-top rounded-top" alt="Immagine prodotto">
        <div class="card-body" style="text-align: center;">
            <h5 class="card-title mb-0">{{$announcement->title}}</h5>
            {{-- <p class="card-text mb-2">{{$announcement->body}}</p> --}}
            <p class="card-text mb-2">{{$announcement->price}} €</p>
            <a href="{{ route('announcements.show', compact('announcement'))}}" class="btn btn-outline-secondary btn-sm mb-2 elegant-font custom-link btn-custom">{{__('ui.view')}}</a>
            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="btn btn-outline-secondary btn-sm mb-2 elegant-font custom-link btn-custom">{{__('ui.toCategory')}} {{ $announcement->category->name }}</a>
            <p class="mb-0" style="border-radius: 10px;">{{__('ui.publishedOn')}} {{$announcement->created_at}} - {{__('ui.author')}} <a class='text-decoration-none colorAltro' href="{{ route('profiloUtente', ['username' => $announcement->user->username]) }}"> {{$announcement->user->username ?? ''}}</a></p>
        </div>
    </div>
</div>