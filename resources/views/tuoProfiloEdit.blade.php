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
    <div class="page-content page-container " id="page-content">
        <div class="altezzaprofilo ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-12">
                        <div class="card profile-card-full ">
                            <div class="row m-0">
                                <div class="col-sm-4 profile-bg-c-lite-green profile-details">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="http://127.0.0.1:8000/pedro.gif" class="profile-image" alt="User-Profile-Image">
                                        </div>
                                        <h6 class="f-w-600 profile-name mt-2" style="font-size: 18px;">
                                            <span>{{ $user->username }}</span>
                                            <button class="btn" type="submit" form="userEdit" style="padding: 5px;">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </h6>
                                        {{-- <p class="profile-name" style="font-size: 16px;">Membro dal: {{$user->created_at}}</p> --}}
                                        <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-20"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block profile-content">
                                        <div class="category">
                                            <h6 class="m-b-20 p-b-5 f-w-600 mb-3 display-1" style="font-size: 20px;">{{__('ui.personalInfoProfile')}}</h6>
                                            <form action="{{route('tuoProfiloUpdate', $user)}}" method="POST" id="userEdit">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labels " style="font-size: 16px;">{{__('ui.accountFirstName')}}</label>
                                                        <input type="text" name="firstname" class="form-control form-control-sm" id="firstname" placeholder="First name" value="{{old('firstname', $user->firstname) }}" >
                                                            @error('firstname')<span>{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountLastName')}}</label>
                                                        <input type="text" name="lastname" class="form-control form-control-sm" id="lastname" placeholder="Last name" value="{{old('lastname', $user->lastname) }}">
                                                        @error('lastname')<span>{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountBirth')}}</label>
                                                        <input type="date" name="birthdate" class="form-control form-control-sm" id="birthdate" value="{{old('birthdate', $user->birthdate) }}" >
                                                        @error('birthdate')<span>{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="genre" class="form-label">{{__('ui.accountGenre')}}</label>
                                                        <select class="form-select form-select-sm" name="genre" id="genre">
                                                            <option selected value="{{old('genre', $user->genre) }}" >{{__('ui.accountGenreDefault')}}</option>
                                                            <option value="1">{{__('ui.accountGenre1')}}</option>
                                                            <option value="2">{{__('ui.accountGenre2')}}</option>
                                                            <option value="3">{{__('ui.accountGenre3')}}</option>
                                                            <option value="4">{{__('ui.accountGenre4')}}</option>
                                                        </select>
                                                        @error('genre')<span>{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountTelephone')}}</label>
                                                        <input type="text" name="telephone" class="form-control form-control-sm" id="telephone" placeholder="Telephone" value="{{old('telephone', $user->telephone) }}" >
                                                        @error('telephone')<span>{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountAddress')}}</label>
                                                        <input type="text" name="address" class="form-control form-control-sm" id="address" placeholder="Address" value="{{old('address', $user->address) }}" >
                                                        @error('address')<span>{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountCity')}}</label>
                                                        <input type="text" name="city" class="form-control form-control-sm" id="city" placeholder="City" value="{{old('city', $user->city) }}" >
                                                        @error('city')<span>{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="country" class="form-label">{{__('ui.accountCountry')}}</label>
                                                        <select class="form-select form-select-sm" name="country" id="country">
                                                            <option selected value="{{old('country', $user->country) }}" >{{__('ui.accountCountryDefault')}}</option>
                                                            <option value="1">Italia</option>
                                                            <option value="2">Spagna</option>
                                                            <option value="3">inghilterra</option>
                                                        </select>
                                                        @error('country')<span>{{$message}}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.accountUserName')}}</label>
                                                        <input type="text" name="username" class="form-control form-control-sm" id="username" placeholder="Username" value="{{old('username', $user->username) }}" >
                                                        @error('username')<span>{{$message}}</span>@enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="labels" style="font-size: 16px;">{{__('ui.email')}}</label>
                                                        <p style="font-size: 16px;">{{ $user->email }}</p>
                                                    </div>
                                                </div>
                                            </form>
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