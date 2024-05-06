{{-- <x-layout>
    <div style="height:130"></div>
    <div class="container">
        <div class="containerRegister">
            <h1 class="display-1 text-center mb-5">Create Account</h1>
            <form method="POST" action="/register" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Insert your firstname">
                        @error('firstname')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Insert your lastname">
                        @error('lastname')<span>{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Choose a username">
                        @error('username')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Insert your email">
                        @error('email')<span>{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Insert your birthdate">
                        @error('birthdate')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-4">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-select" name="genre" id="genre">
                            <option selected>Choose your gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                            <option value="4">Prefer not to say</option>
                        </select>
                        @error('genre')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-4">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Insert your telephone">
                        @error('telephone')<span>{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Insert your address">
                        @error('address')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Insert your city">
                        @error('city')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label">Your country</label>
                        <select class="form-select" name="country" id="country">
                            <option selected>Choose your country</option>
                            <option value="1">Italy</option>
                            <option value="2">England</option>
                            <option value="3">Sto cazzo</option>
                        </select>
                        @error('country')<span>{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Insert a password">
                        @error('password')<span>{{$message}}</span>@enderror
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label">Confirmation Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm your password">
                        @error('password_confirmation')<span>{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <div style="height:40"></div>
</x-layout> --}}

<x-layout>
    <div class="container margin">
        <div class="containerRegister row align-items-center">
            <div class="col-md-4 boxLogin mb-4 mb-md-0 order-md-last">
                <h3 class="display-4 text-center">{{__('ui.alreadyAccount')}}</h3>
                <div class="text-center">
                    <a href="/login" class="btn btn-outline-secondary btn-sm mb-2 elegant-font custom-link btn-custom">{{__('ui.alreadyAccountLogin')}}</a>
                </div>
            </div>
            <div class="col-md-8 order-md-first">
                <h1 class="display-3 text-center mb-4">{{__('ui.newAccount')}}</h1>
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    {{-- Zona informazioni personali --}}
                    <div class="">
                        {{-- prima riga che contiene nome e cognome --}}
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="firstname" class="form-label">{{__('ui.accountFirstName')}}</label>
                                <input type="text" name="firstname" class="form-control form-control-sm" id="firstname" placeholder="First name">
                                @error('firstname')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="lastname" class="form-label">{{__('ui.accountLastName')}}</label>
                                <input type="text" name="lastname" class="form-control form-control-sm" id="lastname" placeholder="Last name">
                                @error('lastname')<span>{{$message}}</span>@enderror
                            </div>
                        </div>
                        {{-- seconda riga che contiene la data di nascita, il genere e il numero di telefono --}}
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="birthdate" class="form-label">{{__('ui.accountBirth')}}</label>
                                <input type="date" name="birthdate" class="form-control form-control-sm" id="birthdate">
                                @error('birthdate')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-4">
                                <label for="genre" class="form-label">{{__('ui.accountGenre')}}</label>
                                <select class="form-select form-select-sm" name="genre" id="genre">
                                    <option selected>{{__('ui.accountGenreDefault')}}</option>
                                    <option value="1">{{__('ui.accountGenre1')}}</option>
                                    <option value="2">{{__('ui.accountGenre2')}}</option>
                                    <option value="3">{{__('ui.accountGenre3')}}</option>
                                    <option value="4">{{__('ui.accountGenre4')}}</option>
                                </select>
                                @error('genre')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-4">
                                <label for="telephone" class="form-label">{{__('ui.accountTelephone')}}</label>
                                <input type="text" name="telephone" class="form-control form-control-sm" id="telephone" placeholder="Telephone">
                                @error('telephone')<span>{{$message}}</span>@enderror
                            </div>
                        </div>
                    </div>
                    {{-- Zona informazioni indirizzo --}}
                    <div class="boxinformation">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="address" class="form-label">{{__('ui.accountAddress')}}</label>
                                <input type="text" name="address" class="form-control form-control-sm" id="address" placeholder="Address">
                                @error('address')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-3">
                                <label for="city" class="form-label">{{__('ui.accountCity')}}</label>
                                <input type="text" name="city" class="form-control form-control-sm" id="city" placeholder="City">
                                @error('city')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-3">
                                <label for="country" class="form-label">{{__('ui.accountCountry')}}</label>
                                <select class="form-select form-select-sm" name="country" id="country">
                                    <option selected>{{__('ui.accountCountryDefault')}}</option>
                                    <option value="1">{{__('ui.nationItaly')}}</option>
                                    <option value="2">{{__('ui.nationSpain')}}</option>
                                    <option value="3">{{__('ui.nationEngland')}}</option>
                                </select>
                                @error('country')<span>{{$message}}</span>@enderror
                            </div>
                        </div>
                    </div>
                    {{-- Zona profilo --}}
                    <div class="boxinformation">
                        {{-- terza riga che contiene username e email --}}
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="username" class="form-label">{{__('ui.accountUserName')}}</label>
                                <input type="text" name="username" class="form-control form-control-sm" id="username" placeholder="Username">
                                @error('username')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">{{__('ui.email')}}</label>
                                <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Email">
                                @error('email')<span>{{$message}}</span>@enderror
                            </div>
                        </div>
                        {{-- quarta riga che contiene la password --}}
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="password" class="form-label">{{__('ui.Password')}}</label>
                                <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Password">
                                @error('password')<span>{{$message}}</span>@enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">{{__('ui.accountPasswordConfirm')}}</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-sm" id="password_confirmation" placeholder="Confirm password">
                                @error('password_confirmation')<span>{{$message}}</span>@enderror
                            </div>
                        </div>
                    </div>
                    {{-- bottone di invio --}}
                    <div class="text-center mt-3">
                        {{-- <button type="submit" class="btn btn-sm btn-primary">Sign In</button> --}}
                        <button class="btn btn-outline-secondary btn-sm mb-2 elegant-font custom-link btn-custom">{{__('ui.accountSignIn')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
