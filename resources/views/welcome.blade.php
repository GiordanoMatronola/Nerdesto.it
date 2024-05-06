<x-layout>
    {{-- il seguente messaggio appare solo ai registrati--}}
    @auth
        @if(session('requestAlreadySent'))
            <div class="justify-content-center allertimport d-flex ruleallert">
                <div class="col-8 alert alert-warning" role="alert">
                    {{session('requestAlreadySent')}}
                </div>
            </div>
        @endif
        @if(session('requestSent'))
        <div class=" justify-content-center ruleallert allertimport d-flex">
            <div class="col-8 alert alert-success mt-5 " role="alert">
                {{session('requestSent')}}
            </div>
        </div>
        @endif
    {{-- messaggio che l'utente è diventato revisore solo per admin--}}
        @if(auth()->user()->is_admin)
            @if(session('RevisorAccept'))
            <div class="row justify-content-center allertimport ruleallert d-flex">
                <div class="col-6 alert alert-success mt-5" role="alert">
                    {{session('RevisorAccept')}}
                </div>
            </div>
            @endif
        @endif
    @endauth

    {{--immagine vista solo da mobile e tablet--}}
    <div class="mobileProva d-lg-none" style="background-image: url({{__('ui.ImgMobile')}});">

    </div>
    {{-- carousel principale --}}
    <div id="carouselExampleFade" id="cardannuncio" class="carousel slide carousel-fade d-none d-lg-block" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="{{__('ui.Img1Carousel')}}" class="d-block w-100" alt="Immagine 1">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{__('ui.Img2Carousel')}}" class="d-block w-100" alt="...">
            </div>
            {{-- <div class="carousel-item">
                <img src="public/storage/immagine1carosello.jpg" class="d-block w-100" alt="...">
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <hr class="elegant-line">
    <div id="servizi" style="height: 90px;"></div>
    {{-- servizi carousel 
    <div class="container" style="width: 300px; height: 550px; margin-top:50">
        <p class="display-5 text-center">Servizi</p>
        <div class="slider">
            <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
            <input type="radio" name="slider" title="slide2" class="slider__nav"/>
            <input type="radio" name="slider" title="slide3" class="slider__nav"/>
            <input type="radio" name="slider" title="slide4" class="slider__nav"/>
            <div class="slider__inner">
                <div class="slider__contents">
                    <div class="image-container">
                        <img src="http://127.0.0.1:8000/sales.png" alt="Immagine 1">
                        <img src="link_all_immagine" alt="Immagine 1">
                    </div>
                    <h2 class="slider__caption">VENDI</h2>
                    <p class="slider__txt"> Crea un annuncio con quello che vuoi vendere, al resto ci pensiamo noi!</p>
                </div>
                <div class="slider__contents">
                    <div class="image-container">
                        <img src="http://127.0.0.1:8000/compra.jpg" alt="Immagine 1">
                        <img src="link_all_immagine" alt="Immagine 2">
                    </div>
                    <h2 class="slider__caption">COMPRA</h2>
                    <p class="slider__txt">Non vendiamo sogni, ma Manga, Action Figure, Videogames e tanto altro</p>
                </div>
                <div class="slider__contents">
                    <div class="image-container">
                        <img src="http://127.0.0.1:8000/sign in.jpg" alt="Immagine 1">
                        <img src="link_all_immagine" alt="Immagine 3">
                    </div>
                    <h2 class="slider__caption">ISCRIVITI</h2>
                    <p class="slider__txt">Iscriviti per rimanere aggiornat* sui nostri sconti e sulle nuove uscite</p>
                </div>
                <div class="slider__contents">
                    <div class="image-container">
                        <img src="http://127.0.0.1:8000/feedback.jpg" alt="Immagine 1">
                        <img src="link_all_immagine" alt="Immagine 4">
                    </div>
                    <h2 class="slider__caption">FEEDBACK</h2>
                    <p class="slider__txt">Lasciaci un Feedback per sapere come ti sei trovato con noi</p>
                </div>
            </div>
        </div>
    </div>
    --}}
    @if(session('access.denied'))
        <div class="alert alert-danger" role="alert">
            {{ session('access.denied') }}
        </div>
    @endif
    <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2>{{__('ui.whatWe')}}<span>{{__('ui.weOffer')}}</span></h2>
                    </div>
                </div>
            </div>
            <div class="row our-offer-items less-carousel">
                <div class="col-lg-3 col-md-6 col-sm-6 equal-height">
                    <a href="{{ route('announcements.create') }}" class="text-dark text-decoration-none">
                        <div class="item">
                            <i class="fas fa-handshake"></i>
                            <h4>{{__('ui.sell')}}</h4>
                            <p>
                                {{__('ui.sellDescription')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 equal-height">
                    <a href="{{ route('announcements.index') }}" class="text-dark text-decoration-none">
                        <div class="item">
                            <i class="fas fa-credit-card"></i>
                            <h4>{{__('ui.buy')}}</h4>
                            <p>
                                {{__('ui.buyDescription')}}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 equal-height">
                    <a href="{{ route('delivery') }}" class="text-dark text-decoration-none">
                    <div class="item">
                        <i class="fas fa-truck"></i>
                        <h4>{{__('ui.fastDeliver')}}</h4>
                        <p>
                            {{__('ui.fastDeliverDescription')}}
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 equal-height">
                    <a href="{{ route('formRevisor') }}" class="text-dark text-decoration-none">
                        <div class="item">
                            <i class="fas fa-user-check"></i>
                            <h4>{{__('ui.becomeRevisor')}}</h4>
                            <p>
                                {{__('ui.becomeRevisorDescription')}}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="elegant-line2">
    </section>
    <div class="container ">
        {{-- componente che si occupa della navbar delle categorie --}}
        {{-- <livewire:homepage.bar-category/> --}}
        {{-- componente che si occupa delle card che appaiono --}}
        <livewire:homepage.dashboardhomepage/>
        <div class="mt-5">
            <h1 class="text-center display-4">{{__('ui.moreAnnouncements')}}</h1>
            
            <a href="{{ route('announcements.index') }}" class="colorAltro text-decoration-none"><p class="text-center fs-1 display-5">{{__('ui.lookHere')}}</p></a>
        </div>
    </div>
</x-layout>