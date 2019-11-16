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

    
    <style>
        .navbar-toggler {
            align-self: inherit;
            position: initial;
        }

        /* Media query for collapse button */
        @media (max-width: 990px) {
        .my-bg{
            background-color: #000032;
        }
        
        .navbar .navbar-brand{
            min-height:100px;
        }
        }
        
        @media (min-width: 991px) {
        .my-bg{
            background-color: #000032;
            min-height: 50px;
            max-height: 60px;
        }    
        }
        
        .navbar .navbar-nav .nav-link{
            color:white!important;
        }

        .navbar .navbar-nav{
            margin-top: -20px;
        }

        .navbar .navbar-brand{
            margin-top: -25px;
        }

        .navbar .navbar-toggle {
        background-color:#FF0000 !important;
        }

        .navbar-mine{
            font-family:Gotham;
            font-size:12px;
        }

        .dropdown-mine{
            font-family:Gotham;
            font-size:14px;
        }

        .minw-none {
         min-width: 0 !important;
        }
       
        .dropdown:hover>.dropdown-menu {
        display: block;
        }

    </style>

</head>
<body class="landing-page">
    <div id="app">
    <header id="header-mine">
        <Values></Values>
            <div class="my-bg">
            <b-navbar toggleable="lg" fixed class="mx-5 navbar-mine">
                <div class="d-flex align-items-center justify-content-between">
                    <b-navbar-toggle target="nav-collapse" class="navbar-toggler navbar-toggler-left" style="background-color:white"></b-navbar-toggle>

                    <b-navbar-brand href="{{ url('/') }}" class="ml-5">
                    <b-img fluid src="/img/logo/Logo-Per-Capital-horizontal-original.png" width="220" height="110" class="mt-4 logo-mine"></b-img>
                    </b-navbar-brand>
                </div>

                
                <b-collapse id="nav-collapse" is-nav>
    
                    <b-navbar-nav class="ml-auto nav-items-mine">
                    <b-nav-item-dropdown text="LA EMPRESA" class="hoverli" right>
                            <b-dropdown-item href="{{ url('/about') }}" class="dropdown-mine">¿Por qué PER CAPITAL?</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/team') }}" class="dropdown-mine">Equipo</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/corporate') }}" class="dropdown-mine">Gobierno Corporativo</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/faq') }}" class="dropdown-mine">FAQ</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown text="FONDOS" right>
                            <b-dropdown-item href="{{ url('/mutual') }}" class="dropdown-mine">Fondo Mutual</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/FI') }}" class="dropdown-mine">Fondo Inmobiliario</b-dropdown-item>
                            <b-dropdown-item href="{{ url('/riskcapital') }}" class="dropdown-mine">Capital de riesgo</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item href="{{ url('/services') }}">SERVICIOS</b-nav-item>
                    <b-nav-item-dropdown text="REPORTES" right>
                            <b-dropdown-item href="#" class="dropdown-mine">Trimestral</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Anual</b-dropdown-item>
                    </b-nav-item-dropdown>
                        <b-nav-item href="#contacto"  class="my-nav-link">CONTACTO</b-nav-item>
                        <b-nav-item-dropdown text="IDIOMA" menu-class="minw-none test" right>
                            <b-dropdown-item href="#"> <span class="flag-icon flag-icon-es align-middle"></span></b-dropdown-item>
                            <b-dropdown-item href="#"><span class="flag-icon flag-icon-us"></span></b-dropdown-item>
                        </b-nav-item-dropdown>
    
                        <b-nav-item-dropdown right>
                        <template slot="button-content">
                            <i class="fa fa-user"></i>
                        </template>
                            <b-dropdown-item href="#" class="dropdown-mine">Institucional</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Privado</b-dropdown-item>
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
            </div>
        </header>

        
        <main class="py-4" id="content">
            @yield('content')
        </main>

        <div class="footer-mine">
            <footeralt></footeralt>
        </div>

        <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
        <script type="application/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>

        <script type="application/javascript" src="{{ asset('js/jquery.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/swiper.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/owl.carousel.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/wow.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/jquery.metisMenu.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/jquery.slimscroll.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/tabs.min.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/typed.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/modernizr.js') }}" defer></script>
        <script type="application/javascript" src="{{ asset('js/main.js') }}" defer></script>
    </div>

</body>
</html>
