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
    <link href="{{ asset('/css/styleinsp.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <Values></Values>
        <header>
            <b-navbar toggleable="lg" fixed sticky class="mx-5">
                <b-navbar-brand href="#" class="ml-5">
                    <b-img fluid src="/img/logo/PastedGraphic-1-3.jpeg" href="{{ url('/') }}" width="220" height="110"></b-img>
                </b-navbar-brand>
    
                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    
                <b-collapse id="nav-collapse" is-nav>
    
                    <b-navbar-nav class="ml-auto">
                        <b-nav-item href="{{ url('/') }}">Inicio</b-nav-item>
                        <b-nav-item href="#empresa">La empresa</b-nav-item>
                        <b-nav-item href="#fondos">Fondos</b-nav-item>
                        <b-nav-item href="#servicios">Servicios</b-nav-item>
                        <b-nav-item href="#">Noticias</b-nav-item>
                        <b-nav-item href="#contacto">Contacto</b-nav-item>
                        <b-nav-item-dropdown text="Idioma" right>
                            <b-dropdown-item href="#">Español</b-dropdown-item>
                            <b-dropdown-item href="#">Inglés</b-dropdown-item>
                        </b-nav-item-dropdown>
    
                        <b-nav-item-dropdown text="Inversionista" right>
                            <b-dropdown-item href="#">Institucional</b-dropdown-item>
                            <b-dropdown-item href="#">Privado</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <!-- Authentication Links -->
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
                    </b-navbar-nav>
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
        <script type="application/javascript" src="{{ asset('js/tabs.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/modernizr.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/main.js') }}" defer></script>
    </div>
</body>
</html>
