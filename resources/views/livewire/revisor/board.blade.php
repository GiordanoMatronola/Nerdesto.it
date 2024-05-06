<div class="text-center my-2">
    {{-- se esiste la variabile che contiene l'annuncio allora lo mostra --}}
    @isset($announcement)
    <div class="row justify-content-center">
        <div class="card col-10 my-3" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-12">
                    <div id="carouselExample" class="carousel slide">
                        @if($announcement->images()->get()->isNotEmpty())
                            <div class="carousel-inner">
                                @foreach($announcement->images()->get() as $image)
                                    <div class="carousel-item @if($loop->first)active @endif">
                                        <img src="{{$image->getUrl(600,500)}}" class="img-fluid rounded" alt=".." style="height: 400px;">
                                        <div class=" p-2 mt-3 col-12 border-end">
                                            <span class=" inline-block"><i class="fa-solid fa-tags">:</i></span>
                                                @if($image->labels)
                                                    @foreach($image->labels as $label)
                                                    <span class="d-inline">{{$label}},</span>
                                                    @endforeach
                                                @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="card-body">
                                                <h5 class="tc-accent">Revisione Immagini</h5>
                                                <div class="icon-container">
                                                    <span class="icon fas fa-user-alt {{$image->adult}}" data-title="Adulti"></span>
                                                </div>
                                                <div class="icon-container">
                                                    <span class="icon fas fa-mask {{$image->spoof}}" data-title="Satira"></span>
                                                </div>
                                                <div class="icon-container">
                                                    <span class="icon fas fa-medkit {{$image->medical}}" data-title="Medicina"></span>
                                                </div>
                                                <div class="icon-container">
                                                    <span class="icon fas fa-fist-raised {{$image->violence}}" data-title="Violenza"></span>
                                                </div>
                                                <div class="icon-container">
                                                    <span class="icon fas fa-exclamation-triangle {{$image->racy}}" data-title="Provocante"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/id/12/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/10/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://picsum.photos/id/11/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                                </div>
                            </div>
                        @endif
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-12 align-middle">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->body}}</p>
                        <div class="row text-center justify-content-around">
                                <span class="card-text col-4">{{$announcement->price}} <i class="fa-solid fa-euro-sign"></i></span><a href="#" class="col-8 card-link">{{__('ui.toCategory')}} {{$announcement->category->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around text-center">
            {{--Mostra il tastino accetta annuncio--}}
            <a href="#" wire:click="acceptAnnouncement({{$announcement->id}})" class="btn btn-success col-5">{{__('ui.AcceptRevisorAdd')}}</a>
            {{--Mostra il tastino rifiuta annuncio--}}
            <a href="#" wire:click="rejectAnnouncement({{$announcement->id}})" class="btn btn-danger col-5">{{__('ui.RejectRevisorAdd')}}</a>
        </div>
    </div>
    @else
    {{--Mostra titolo board in base a quanti annunci ci sono--}}
    @if(app\models\Announcement::where('is_accepted', null))
        <h1>{{__('ui.remainingAnnounce')}}{{app\models\Announcement::where('is_accepted', null)->count()}}</h1>
    @else
        <h1>{{__('ui.noRemainingAnnounce')}}</h1>
    @endif
    {{--Mostra messaggio di annuncio accettato--}}
        @if(session('adsAccept'))
            <div class="alert alert-success" role="alert">
                {{session('adsAccept')}}
                <div class="mt-3">
                    <a href="#" wire:click="tryagain({{app\models\announcement::whereNotNull('is_accepted')->get()->last()}})" class="btn btn-success col-5">{{__('ui.revisorBackAction')}}</a>
                </div>
            </div>
    {{--Mostra messaggio di annuncio rifiutato--}}
        @elseif(session('adsReject'))
        <div class="alert alert-danger" role="alert">
            {{session('adsReject')}}
            <div  class="mt-3 row justify-content-center">
                <a href="#" wire:click="tryagain({{app\models\announcement::whereNotNull('is_accepted')->get()->last()}})" class="btn btn-danger col-5">{{__('ui.revisorBackAction')}}</a>
                <div class="accordion col-8 m-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header text-center">
                            <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('ui.alertUser')}} <i class="fa-solid fa-bell mx-2"></i> 
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form wire:submit.prevent="AlertUser">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">{{__('ui.writeMotivation')}}</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model='textAlertUser'></textarea>
                                        <button type='submit' class="btn btn-danger col-5 mt-4">{{__('ui.Sent')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif 
</div>

