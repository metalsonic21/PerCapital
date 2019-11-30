<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Per Capital</title>

    <!-- VUE -->
    <script type="application/javascript" src="./js/app.js" defer></script>

    <!-- Bootstrap CDN -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Favico -->
    <link rel="shortcut icon" href="./img/logo/Simbolo-Per-Capital-blanco.png">
    <title>Per Capital</title>

    <!-- Custom Styles -->

    <link href="./css/app.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/icons.css" rel="stylesheet">
    <link href="./css/animate.css" rel="stylesheet">
    <link href="./css/swiper.min.css" rel="stylesheet">
    <link href="./css/swiper-slider.css" rel="stylesheet">
    <link href="./css/default.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link href="./css/flag-icon.css" rel="stylesheet">

    
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


        .navbar-mine{
            font-family:Gotham;
            font-size:12px;
        }

        .dropdown-mine{
            font-family:Gotham;
            font-size:14px;
        }

        .dropdown-item:hover{
            background-color:#868e96 !important;
            color: white !important;
        }

        .dropdown-item:focus{
            background-color:#868e96 !important;
            color: white !important;
        }

        .dropdown-item:active{
            background-color:#868e96 !important; 
            color: white !important;
        }

        .minw-none {
         min-width: 0 !important;
        }
       
        .dropdown:hover>.dropdown-menu {
        display: block;
        }

        .bg-separator{
            background-color:#fafcfc;
        }

        .feed-item-title a{
            font-family: Gotham;
            font-size: 16px;
            color: #000032;
        }

        .feed-item-desc{
            font-family: Gotham;
            font-size: 14px;
        }

    </style>

</head>

<body class="landing-page">
    <div id="app">
            <div id="preloader">
                <div class="row loader">
                    <div class="loader-icon">
                    </div>
                </div>
            </div>
        
    <header id="header-mine">
        <disclaimer></disclaimer>
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
                        <b-nav-item-dropdown text="EMPRESA" class="hoverli" right>
                            <b-dropdown-item href="/about" class="dropdown-mine">¿Por qué PER CAPITAL?</b-dropdown-item>
                            <b-dropdown-item href="/about#team" class="dropdown-mine">Equipo</b-dropdown-item>
                            <b-dropdown-item href="/about#corporate" class="dropdown-mine">Gobierno Corporativo</b-dropdown-item>
                            <b-dropdown-item href="/#contacto" class="dropdown-mine">Contacto</b-dropdown-item>
                            <b-dropdown-item href="/about#faq" class="dropdown-mine">FAQ</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown text="FONDOS" right>
                            <b-dropdown-item href="{{ url('/mutual') }}" class="dropdown-mine">Fondo Mutual</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Fondo Inmobiliario</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Capital de riesgo</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item href="{{ url('/services') }}">SERVICIOS</b-nav-item>
                    <b-nav-item-dropdown text="REPORTES" right>
                            <b-dropdown-item href="#" class="dropdown-mine">Trimestral</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Anual</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item-dropdown text="HERRAMIENTAS" right>
                        <b-dropdown-item href="/calculators" class="dropdown-mine">Calculadoras</b-dropdown-item>
                        <b-dropdown-item href="/strategies" class="dropdown-mine">Estrategias</b-dropdown-item>
                        <b-dropdown-item href="/#news" class="dropdown-mine">Noticias</b-dropdown-item>
                        <b-dropdown-item href="/calendar" class="dropdown-mine">Calendario bancario</b-dropdown-item>
                    </b-nav-item-dropdown>
                        <b-nav-item-dropdown right>
                        <template slot="button-content">
                            <i class="fa fa-user"></i>
                        </template>
                            <b-dropdown-item href="#" class="dropdown-mine">Institucional</b-dropdown-item>
                            <b-dropdown-item href="#" class="dropdown-mine">Privado</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <b-nav-item right> <span class="flag-icon flag-icon-es align-middle"></span> </b-nav-item>
                        <b-nav-item right> <span class="flag-icon flag-icon-gb align-middle"></span> </b-nav-item>


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

        <section id="news" style="background-color:#f4f4f4;">
            <div class="container" style="margin-top:-6%">
                <div class="navy-line-2"></div>
                    <h1 class="title-mine" style="color:#000032" align="center">NOTICIAS</h1>
                        <div class="row">
                            <div class="col-lg-4">
                                <script src="//rss.bloople.net/?url=https%3A%2F%2Fwww.economist.com%2Fthe-americas%2Frss.xml&limit=3&showtitle=false&type=js"></script>                          </div>
                            <div class="col-lg-4">
                                <script src="//rss.bloople.net/?url=http%3A%2F%2Fwww.bbc.co.uk%2Fmundo%2Ftemas%2Famerica_latina%2Findex.xml&limit=3&showtitle=false&type=js"></script>
                            </div>
                            <div class="col-lg-4">
                                    <script src="//rss.bloople.net/?url=https%3A%2F%2Ffeeds.a.dj.com%2Frss%2FRSSWorldNews.xml&limit=3&showtitle=false&type=js"></script>
                            </div>
                        </div>
                    </div>
                    <br>
        </section>
            <Logos></Logos>
            <Contact></Contact>
            <br>
        <div class="footer-mine">
            <footeralt></footeralt>
        </div>
        <script type="application/javascript" src="./js/jquery.min.js"></script>
        <script type="application/javascript" src="./js/popper.min.js"></script>
        <script type="application/javascript" src="./js/bootstrap.min.js"></script>
        <script type="application/javascript" src="./js/swiper.min.js"></script>
        <script type="application/javascript" src="./js/isotope.pkgd.min.js"></script>
        <script type="application/javascript" src="./js/modernizr.js"></script>
        <script type="application/javascript" src="./js/main.js"></script>
    </div>

</body>

</html>
