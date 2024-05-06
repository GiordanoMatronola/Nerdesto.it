{{-- <nav class="classnav navbar navbar-expand-lg">
    <ul id="navlinks" class="nav-links navbar flexbox">
        <div class="flexbox">
            <a href="/"><img src="http://127.0.0.1:8000/Nerdestologo.png" alt="Logo del sito" class=" navbar-logo img-fluid"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="flexbox">
            <li class="forward mt-2"><a href="{{route('announcements.create')}}">Vendi</a></li>
            <li class="forward mt-2"><a href="{{route('announcements.index')}}">Compra</a></li>
            {{-- da qui.... --}}
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{route('categoryShow',compact ('category'))}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li> --}}
            {{-- ... a qui dropdown che porta ai soli annunci per la categoria selezionata  --}}
            {{-- <li class="forward mt-2"><a href="#">Feedback</a></li>
        </div>
        @guest
        <div class="flexboxRL">
            <li class="center mt-2"><a href="/login">Login</a></li>
            <li class="center mt-2"><a href="/register">Sign In</a></li>
            <li class="nav-item fs-5">
                <a class="nav-link btn-search Wood-2-rgba px-xl-3 ms-xxl-5" href="#"><i class="fa-solid fa-magnifying-glass"></i>Cerca</a>
            </li>
        @endguest
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->username}}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Il tuo profilo</a></li>
                    <li><a class="dropdown-item" href="{{ route('announcements.create')}}">Crea annuncio</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item nav-links" 
                        onclick="event.preventDefault(); 
                        getElementById('form-logout').submit();">Logout</a>
                        <form action="/logout" method="POST" id="form-logout">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            @if(Auth::user()->is_revisor)
            <li>
                <a href="{{route('revisor.dashboard')}}" class=" btn position-relative">
                    Bacheca Revisore
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{App\Models\Announcement::toBeRevisionedCount()}}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            @endif
            @endauth
            <div class="d-flex ms-auto">
            <li class="ms-auto">
                <form action="{{route('announcements.search')}}" method="GET"  class="form-inline my-2 my-lg-0 position-relative d-flex gap-2">
                <input name="searched" class="form-control mr-sm-2 " type="search" placeholder="Funko, One Piece, ..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerca</button>
            </form>
            </li>
        </div>
        </div>
    </div>
    </div>
</ul>
<div class="barsearch d-none">
    <div class="row prova justify-content-center ">
        <form class="d-flex col-8" role="search">
        <input class="form-control me-2 formshadow" type="search" placeholder="Hai qualche preferenza? Inseriscila qui e ti propongo qualche lavoretto" aria-label="Search">
        <button class="btn btn-search2 formshadow" type="submit">Cedsadasdarca</button>
        </form>
    </div>
</div>
</nav>  --}}

<div>
    <nav class="navbar navbar-expand-lg navcustom fixed-top">
        <div class="container-fluid">
            <div class="flexbox">
                <a href="/"><img src="http://127.0.0.1:8000/Nerdestologo.png" alt="Logo del sito" class="navbar-logo img-fluid"></a>
            </div>
        <button class="navbar-toggler btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mt-3">
                <li class="nav-item ">
                    <a  class=" mt-1  d-flex align-items-center">
                        <x-_locale lang='it' nation='it'/>
                    </a>
                </li>
                <li class="nav-item">
                    <a  class="mt-1 d-flex align-items-center">
                        <x-_locale lang='en' nation='gb'/>
                    </a>
                </li>
                <li class="nav-item">
                    <a  class="mt-1 d-flex align-items-center ">
                        <x-_locale lang='es' nation='es'/>
                    </a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle custom-text " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{route('tuoProfilo')}}">{{__('ui.navUserProfile')}}</a></li>
                        <li><a class="dropdown-item" href="{{ route('announcements.create')}}">{{__('ui.navAnnounceCreateNav')}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item nav-links" 
                            onclick="event.preventDefault(); 
                            getElementById('form-logout').submit();">{{__('ui.navLogout')}}</a>
                            <form action="/logout" method="POST" id="form-logout">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->is_revisor)
                <li>
                    <a href="{{route('revisor.dashboard')}}" class="btn position-relative custom-text" style="margin-right: 10px">
                        {{__('ui.revisorDB')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Announcement::toBeRevisionedCount()}}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item ms-lg-2 d-none d-lg-block"></li>
                <li><hr class="dropdown-divider"></li>
                @endif
            </ul>
            @endauth
            @guest
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link custom-text " href="/login">{{__('ui.login')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-text" href="/register">{{__('ui.register')}}</a>
                </li>
            </ul>
            @endguest
            <!-- Barra di ricerca -->
            {{-- <form action="{{route('announcements.search')}}" method="GET"  class="d-flex pt-3 justify-content-center justify-content-lg-end order-lg-last">
                <input name="searched" class="form-control mr-sm-2 " type="search" placeholder="Funko, One Piece, ..." aria-label="Search">
                <button class="btn btn-outline-secondary custom-link mx-1 btn-custom" type="submit">Cerca</button>
            </form> --}}
        </div>
    </div>
</nav>

