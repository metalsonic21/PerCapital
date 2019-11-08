<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Per Capital</title>

    <!-- Scripts -->
    <script type="application/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('img/logo/Simbolo-Per-Capital-blanco.png') }}">
    <title>Per Capital</title>

    <!-- Bootstrap CDN -->


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/flag-icon.css') }}" rel="stylesheet">

</head>
<body class="landing-page">
    <div id="app">
        <Values></Values>
        <header>
            <b-navbar toggleable="lg" fixed sticky class="mx-5 navbar-mine">
                <b-navbar-brand href="#" class="ml-5">
                    <b-link href="{{ url('/') }}"><b-img fluid src="/img/logo/Logo-Per-Capital-horizontal-original.png" width="220" height="110" class="mt-4"></b-img></b-link>
                </b-navbar-brand>
    
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    
                <b-collapse id="nav-collapse" is-nav>
    
                    <b-navbar-nav class="ml-auto">
                    <b-nav-item-dropdown text="La empresa" right>
                            <b-dropdown-item href="{{ url('/about') }}">¿Por qué PER CAPITAL?</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/team') }}">Equipo</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/faq') }}">FAQ</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown text="Fondos" right>
                            <b-dropdown-item href="{{ url('/mutual') }}">Fondo Mutual</b-dropdown-item>
                            <b-dropdown-item href="#">Fondo Inmobiliario</b-dropdown-item>
                            <b-dropdown-item href="#">Capital de riesgo</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item href="{{ url('/services') }}">Servicios</b-nav-item>
                    <b-nav-item-dropdown text="Reportes" right>
                            <b-dropdown-item href="#">Trimestral</b-dropdown-item>
                            <b-dropdown-item href="#">Anual</b-dropdown-item>
                    </b-nav-item-dropdown>
                        <b-nav-item href="#contacto">Contacto</b-nav-item>
                        <b-nav-item-dropdown text="Idioma" right>
                            <b-dropdown-item href="#"><span class="flag-icon flag-icon-es"></span>&nbsp;Español</b-dropdown-item>
                            <b-dropdown-item href="#"><span class="flag-icon flag-icon-us"></span>&nbsp;Inglés</b-dropdown-item>
                        </b-nav-item-dropdown>
    
                        <b-nav-item-dropdown text="Inversionista" right>
                            <b-dropdown-item href="#">Institucional</b-dropdown-item>
                            <b-dropdown-item href="#">Privado</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <!-- Authentication Links 
                        @guest
                        <b-nav-item right href="{{ route('login') }}">Login</b-nav-item>
                        @if (Route::has('register'))
                        <b-nav-item right href="{{ route('register') }}">Registro</b-nav-item>
                        @endif
                        @else

                        <b-nav-item-dropdown right text="{{ Auth::user()->name }}">
                            <b-dropdown-item href="{{ route('logout') }}" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</b-dropdown-item>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
                        </b-nav-item-dropdown>
                        @endguest
                    </b-navbar-nav>-->
                </b-collapse>
            </b-navbar>
            <br>
    
        </header>

        
        <main class="py-4">
            @yield('content')
        </main>

        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
        <script type="application/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>

        <script type="application/javascript" src="{{ asset('js/jquery.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/swiper.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/owl.carousel.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/wow.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/tabs.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/typed.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/modernizr.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/main.js') }}" defer></script>
    </div>
</body>
</html>
