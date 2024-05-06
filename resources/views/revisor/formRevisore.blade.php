<x-layout>
    @if(session('request_empty'))
    <div class=" justify-content-center allertimport d-flex ruleallert">
        <div class="col-8 alert alert-success mt-5" role="alert">
            {{session('request_empty')}}
        </div>
    </div>
@endif
    <div class="container margin revisore">
            <div class=" row align-items-center">
                <div class="col-md-12">
                    <h1 class="display-1 text-center mb-4">{{__('ui.joinTeam')}}<span style="color: #924aa0"> team!</span></h1>
                    <h3 class="display-3 text-center mb-4">{{__('ui.becomeRevisor')}}</h1>
                        {{-- Zona informazioni personali --}}
                        <div class="boxinformation">
                            {{-- prima riga che le 4 immagini --}}
                            <div class="row justify-content-around">
                                <figure class="col-12 col-md-6 col-lg-3">
                                        <div class="img-area">
                                            <img src="http://127.0.0.1:8000/Noi/emanueleAulab.png" alt="" class="img-back">
                                            <a href="https://www.linkedin.com/in/emanuele-virgili-fullstack/">
                                                <img src="http://127.0.0.1:8000/Noi/emanuele.png" alt="" class="img-front">
                                        </a>
                                        </div>
                                    </figure>
                                    <figure class="col-12 col-md-6 col-lg-3">
                                        <div class="img-area">
                                            <img src="http://127.0.0.1:8000/Noi/rinoAulab.png" alt="" class="img-back">
                                            <a href="https://www.linkedin.com/in/rino-isernia-024962222/">
                                                <img src="http://127.0.0.1:8000/Noi/rino.png" alt=" " class="img-front">
                                            </a>
                                        </div>
                                    </figure>
                                    <figure class="col-12 col-md-6 col-lg-3">
                                        <div class="img-area">
                                            <img src="http://127.0.0.1:8000/Noi/giordanoAulab.png" alt="" class="img-back">
                                            <a href="https://www.linkedin.com/in/giordano-matronola-b18455198/">
                                            <img src="http://127.0.0.1:8000/Noi/giordano.png" alt="" class="img-front">
                                            </a>
                                        </div>
                                    </figure>
                                    <figure class="col-12 col-md-6 col-lg-3">
                                        <div class="img-area">
                                            <img src="http://127.0.0.1:8000/Noi/elisaAulab.png" alt="" class="img-back">
                                            <a href="https://www.linkedin.com/in/elisa-poggi-dev/">
                                                <img src="http://127.0.0.1:8000/Noi/elisa.png" alt="" class="img-front">
                                            </a>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            <form method="GET" action="{{route('becomeRevisor')}}" enctype="multipart/form-data">
                            {{--seconda riga che contiene la text-area --}}
                            <div class="row justify-content-center">
                                <h3 class="display-6 text-center mb-3">{{__('ui.aboutYou')}}</h3>
                                <label for="floatingTextarea" class="text-center display-6 fs-3 mt-2 mb-4">{{__('ui.aboutYouDescription')}}</label>
                                <div class="form-floating col-8 text-center">
                                    <textarea class="form-control" id="floatingTextarea" name="aboutYou" style="border: 1px solid #ced4da; border-radius: 8px; padding: 10px; font-size: 16px;"></textarea>
                                </div>
                            </div>
                        </div>
                        {{-- bottone di invio --}}
                        <div class="text-center mt-3">
                            {{-- <button type="submit" class="btn btn-sm btn-primary">Sign In</button> --}}
                            <button type="submit" class="btn btn-outline-secondary btn-custom btn-sm mb-2 elegant-font custom-link btn-custom">{{__('ui.becomeRevisor')}}</button>
                        </div>
                    </form>
                </div>
            </div>

</x-layout>