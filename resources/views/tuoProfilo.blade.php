<x-layout>
    {{-- <div class="container margin">
        <div class="containerRegister row align-items-center">
            <div class="col-12  boxLogin mb-4 mb-md-0">
                <div class="text-center">
                </div>
            </div>
            <div class="col-12">
                <h1 class="display-3 text-center mb-4">{{__('ui.tuoProfilo')}}</h1>
                {{-- Zona informazioni personali --}}
                {{-- <div class="boxinformation"> --}}
                    {{-- prima riga che contiene nome e cognome --}}
                    {{-- <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">{{__('ui.accountFirstName')}}</label>
                            <p class="form-control">{{ $user->firstname }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">{{__('ui.accountLastName')}}</label>
                            <p class="form-control">{{ $user->lastname }}</p>
                        </div>
                    </div> --}}
                    {{-- seconda riga che contiene la data di nascita, il genere e il numero di telefono --}}
                    {{-- <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="form-label">{{__('ui.accountBirth')}}</label>
                            <p class="form-control">{{ $user->birthdate }}</p>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{__('ui.accountGenre')}}</label>
                            <p class="form-control">{{ $user->genre }}</p>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{__('ui.accountTelephone')}}</label>
                            <p class="form-control">{{ $user->telephone }}</p>
                        </div>
                    </div>
                </div> --}}
                {{-- Zona informazioni indirizzo --}}
                {{-- <div class="boxinformation">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">{{__('ui.accountAddress')}}</label>
                            <p class="form-control">{{ $user->address }}</p>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">{{__('ui.accountCity')}}</label>
                            <p class="form-control">{{ $user->city }}</p>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">{{__('ui.accountCountry')}}</label>
                            <p class="form-control">{{ $user->country }}</p>
                        </div>
                    </div>
                </div> --}}
                {{-- Zona profilo --}}
                {{-- <div class="boxinformation"> --}}
                    {{-- terza riga che contiene username e email --}}
                    {{-- <div class="row mb-2">
                        <div class="col-md-6">
                            <label class="form-label">{{__('ui.accountUserName')}}</label>
                            <p class="form-control">{{ $user->username }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <p class="form-control">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="container">
        <div class="rounded profile-position">
            <div class="row justify-content-center ">
                <div class="col-md-4 col-lg-3 border-right profile-divider">
                    <div class="profile-info-box d-flex flex-column align-items-center p-3 py-5">
                        <img src="http://127.0.0.1:8000/ghali.jpg" alt="Immagine Utente" class="rounded-circle profile-image">
                        <span class="font-weight-bold mt-2 text-center">{{ $user->firstname }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5 border-right text-center">
                    <div class="profile-settings p-3 py-5">
                        <div class="">
                            <h4 class=" text-center ">Il tuo Profilo</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="labels">Nome</label>
                                <p class="form-control">{{ $user->firstname }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Cognome</label>
                                <p class="form-control">{{ $user->lastname }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="labels">Data di Nascita</label>
                                <p class="form-control">{{ $user->birthdate }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Genere</label>
                                <p class="form-control">{{ $user->genre }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="labels">Telefono</label>
                                <p class="form-control">{{ $user->telephone }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Indirizzo</label>
                                <p class="form-control">{{ $user->address }}</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Città</label>
                                <p class="form-control">{{ $user->city }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Paese</label>
                                <p class="form-control">{{ $user->country }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="labels">Nome Utente</label>
                                <p class="form-control">{{ $user->username }}</p>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Email</label>
                                <p class="form-control">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-content page-container" id="page-content">
        <div class="altezzaprofilo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-12">
                        <div class="card profile-card-full">
                            <div class="row m-0">
                                <div class="col-sm-4 profile-bg-c-lite-green profile-details">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="http://127.0.0.1:8000/pedro.gif" class="profile-image" alt="User-Profile-Image">
                                        </div>
                                        <h6 class="f-w-600 profile-name mt-2" style="font-size: 18px;">
                                            <span>{{ $user->username }}</span>
                                            <a href="{{route('tuoProfiloEdit', $user)}}" class="edit-profile-btn">
                                                <i class="fas fa-edit "></i> 
                                            </a>
                                        </h6>
                                        {{-- <p class="profile-name" style="font-size: 16px;">Membro dal: {{$user->created_at}}</p> --}}
                                        <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-20"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block profile-content">
                                        <div class="category">
                                            <h6 class="m-b-20 p-b-5 f-w-600 mb-3 display-1" style="font-size: 20px;">{{__('ui.personalInfoProfile')}}</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labels " style="font-size: 16px;">{{__('ui.accountFirstName')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->firstname }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountLastName')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->lastname }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountBirth')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->birthdate }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labels mb-2" style="font-size: 16px;">{{__('ui.accountGenre')}}</label>
                                                    <p style="font-size: 16px;">
                                                        @switch( $user->genre)
                                                            @case(1)
                                                            <i class="fa-solid fa-mars"></i>
                                                            @break
                                                            @case(2)
                                                            <i class="fa-solid fa-venus"></i>
                                                            @break
                                                            @case(3)
                                                            <i class="fa-solid fa-rainbow"></i>
                                                            @break
                                                            @case(4)
                                                            Non specificato
                                                            @break
                                                        @endswitch
                                                        </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountTelephone')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->telephone }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountAddress')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->address }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountCity')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->city }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labels mb-2" style="font-size: 16px;">{{__('ui.accountCountry')}}</label>
                                                    <p style="font-size: 16px;"> 
                                                    @switch($user->country)
                                                        @case(1)
                                                        <i class="fi fi-it"></i>
                                                        @break
                                                        @case(2)
                                                        <i class="fi fi-es"></i>
                                                        @break
                                                        @case(3)
                                                        <i class="fi fi-gb"></i>
                                                        @break
                                                    @endswitch</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.accountUserName')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->username }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="labels" style="font-size: 16px;">{{__('ui.email')}}</label>
                                                    <p style="font-size: 16px;">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="category">
                                            {{-- <h6 class="m-b-20 m-t-40 p-b-5  f-w-600" style="font-size: 20px;">QUI ANNUNCI O ALTRO</h6> --}}
                                            <!-- Aggiungi qui gli annunci o altre informazioni -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>