<footer class="footer mt-3">
    <div class="waves mt-4">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
        <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        {{-- <li class="social-icon__item"><a class="social-icon__link" href="#">
                <x-_localefarfallino lang='fa' nation='fa' />
            </a></i> --}}
    </ul>
    <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">{{ __('ui.Home') }}</a></li>
        <li class="menu__item"><a class="menu__link" href="#">{{ __('ui.footerAbout') }}</a></li>
        <li class="menu__item mb-1"><a class="menu__link" href="#servizi">{{ __('ui.footerServices') }}</a></li>
        <li class="menu__item"><a class="menu__link" href="#">{{ __('ui.Team') }}</a></li>
        <li class="menu__item"><a class="menu__link" href="#">{{ __('ui.footerContact') }}</a></li>
    </ul>
    <ul class="menu">

        {{-- onclick="event.preventDefault(); getElementById('form-request-revisor').submit();" --}}


        {{-- <li class="menu__item"><a class="menu__link text-primary" href="{{route('becomeRevisor')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" >Mandaci la tua richiesta </a></li> --}}
        {{-- <li class="menu__item"><a class="menu__link text-primary"  href="{{route('formRevisor')}}"  --}}
        {{-- onclick="event.preventDefault(); getElementById('form-request-revisor').submit();" --}}
        {{-- >{{__('ui.footerRequest')}}</a> --}}
        {{-- <form action="{{route('becomeRevisor')}}" method="GET" id="form-request-revisor">
            @csrf
        </form> --}}
    </ul>
    <p>&copy;2024 Nerdesto | All Rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
