<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/swiper-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese"
        rel=stylesheet>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel=stylesheet>

    <title>Per Capital @yield('title')</title>
</head>
<body>
    <div id="app">

            <div class=hidden-xs id=top-bar>
                    <div class=container>
                        <div class=row>
                            <div class="col-xs-12 col-md-9">
                                <ul class=top-bar-info>
                                    <li><i class="fa fa-clock-o"></i>Time: Tusday-Monday : 9:00am-6:00pm
                                        <li><i class="fa fa-phone"></i> Phone: +1-23-456789
                                            <li><i class="fa fa-envelope-o"></i>Email: example@email.com
                                </ul>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <ul class="hidden-sm social-icons">
                                    <li><a href=#><i class="fa fa-facebook"></i></a>
                                        <li><a href=#><i class="fa fa-twitter"></i></a>
                                            <li><a href=#><i class="fa fa-instagram"></i></a>
                                                <li><a href=#><i class="fa fa-pinterest"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <header>
                    <nav class="navbar navbar-custom navbar-default" data-offset-top=50 data-spy=affix>
                        <div class=container>
                            <div class=row>
                                <div class="navbar-header navbar-header-custom"><button class="collapsed menu-icon navbar-toggle" data-target=#bs-example-navbar-collapse-1 data-toggle=collapse aria-expanded=false type=button><span class=icon-bar></span> <span class=icon-bar></span> <span
                                            class=icon-bar></span></button>
                                    <a href=index.html class=navbar-logo><img alt=logo src=img/logos/logo.png> </a>
                                </div>
                                <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
                                    <ul class="nav navbar-links-custom navbar-nav navbar-right">
                                        <li class=active-link><a href=index.html>Home</a>
                                            <li><a href=about-company.html>About</a>
                                                <li class=dropdown><a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown>Services</a>
                                                    <ul class="dropdown-menu dropdown-menu-left">
                                                        <li><a href=services.html>Services</a>
                                                            <li><a href=services-grid.html>Services-grid</a>
                                                                <li><a href=services-2.html>Services-detail</a>
                                                    </ul>
                                                    <li class=dropdown><a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown>Blog</a>
                                                        <ul class="dropdown-menu dropdown-menu-left">
                                                            <li><a href=blog-grid.html>Blog Grid</a>
                                                                <li><a href=blog-list.html>Blog List</a>
                                                                    <li><a href=blog-post.html>Blog Post</a>
                                                        </ul>
                                                        <li class=dropdown><a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown>Project</a>
                                                            <ul class="dropdown-menu dropdown-menu-left">
                                                                <li><a href=projects.html>Projects</a>
                                                                    <li><a href=project-detail.html>Project-detail</a>
                                                            </ul>
                                                            <li class=dropdown><a href=# class=dropdown-toggle aria-expanded=false aria-haspopup=true data-toggle=dropdown>Pages</a>
                                                                <ul class="dropdown-menu dropdown-menu-left">
                                                                    <li><a href=about-team.html>About Team</a>
                                                                        <li><a href=404.html>404</a>
                                                                </ul>
                                                                <li><a href=contact.html>Contact</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class=swiper-container>
                    <div class=swiper-wrapper data-swiper-autoplay=2000>
                        <div class=swiper-slide style=background-image:url(img/content/slider/slide-1.jpg)>
                            <h2 data-caption-animate=fadeInUp>Think and Grow Rich</h2>
                            <h5>You are the master of your destiny. You can influence, direct and control your own environment.<br>You can make your life what you want it to be<br><br><i>Napoleon Hill</i></h5><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                        </div>
                        <div class=swiper-slide style=background-image:url(img/content/slider/slide-3.jpg)>
                            <h2 data-caption-animate=fadeInUp>It always seems impossible until it's done.</h2>
                            <h5>You are the master of your destiny. You can influence, direct and control your own environment.<br>You can make your life what you want it to be<br><br><i>Napoleon Hill</i></h5><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                        </div>
                        <div class=swiper-slide style=background-image:url(img/content/slider/slide-2.jpg)>
                            <h2 data-caption-animate=fadeInUp>You Can change the World</h2>
                            <h5>In any moment of decision, the best thing you can do is the right thing, the next best thing is the wrong thing,<br>and the worst thing you can do is nothing.<br><br><i>Theodore Roosevelt</i></h5><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                        </div>
                        <div class=swiper-slide style=background-image:url(img/content/slider/slide-4.jpg)>
                            <h2 data-caption-animate=fadeInUp>Believe you can and you're halfway there.</h2>
                            <h5>Cherish your vision and your dreams as they are the children of your soul,<br>the blueprints of your ultimate achievements.<br><br><i>Napoleon Hill</i></h5><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                        </div>
                    </div>
                    <div class=swiper-pagination></div>
                    <div class=swiper-button-next></div>
                    <div class=swiper-button-prev></div>
                </div>
                <div class=block-section>
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h5>Get our Articles</h5>
                            <h3>Welcome to our template</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br>labore et dolore magna aliqua. Ut enim ad minim veniam
                        </div>
                        <div class=row>
                            <div class=mt-70>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <article class="hover-shadow article-block"><i class=icon-flag aria-hidden=true></i>
                                        <h4>Personal Support</h4>
                                        <p>Lorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus probatus ad. Quo eu etiam.</p><a href=# class=button-text>Learn more</a>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <article class="hover-shadow article-block"><i class=icon-cloud aria-hidden=true></i>
                                        <h4>Diverse Icons</h4>
                                        <p>Lorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus probatus ad. Quo eu etiam.</p><a href=# class=button-text>Learn more</a>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <article class="hover-shadow article-block"><i class=icon-compass aria-hidden=true></i>
                                        <h4>Responsive Design</h4>
                                        <p>Lorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus probatus ad. Quo eu etiam.</p><a href=# class=button-text>Learn more</a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section grey-section">
                    <div class=container>
                        <div class=row>
                            <div class="col-xs-12 col-md-5 col-sm-5 about-section">
                                <div class=main-heading>
                                    <h5>About our company</h5>
                                    <h3>We are a young agency.</h3>
                                </div>
                                <div class="mt-20 text-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-1"><img alt=about-image src=img/content/consulting.jpg class=image-shadow></div>
                        </div>
                    </div>
                </div>
                <div class=block-section>
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h5>About our services</h5>
                            <h3>Our Services</h3>
                        </div>
                        <section class=our-services-carousel>
                            <div class=row>
                                <div class="owl-carousel owl-theme" id=our-services-carousel>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-1.jpg>
                                        <div class=content-our-services>
                                            <h4>Business Growth</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-2.jpg>
                                        <div class=content-our-services>
                                            <h4>Financial Planing</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-3.jpg>
                                        <div class=content-our-services>
                                            <h4>Business Consulting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-4.jpg>
                                        <div class=content-our-services>
                                            <h4>Organization</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-5.jpg>
                                        <div class=content-our-services>
                                            <h4>Business Advisor</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                    <div class="item hover-shadow our-services"><img alt=services-image src=img/content/services/serv-6.jpg>
                                        <div class=content-our-services>
                                            <h4>Marketing</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p><a href=#>Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class=parallax-section style=background-image:url(img/content/backgrounds/section-bg1.jpg)>
                    <div class=container>
                        <div class=row>
                            <div class=counter-section>
                                <div class="col-xs-12 col-sm-6 col-md-3 counter-item"><i class=icon-user-1></i>
                                    <h4 class=countup>1400</h4>
                                    <p>Happy Clients
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 counter-item"><i class=icon-shield></i>
                                    <h4 class=countup>500</h4>
                                    <p>Problems solved
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 counter-item"><i class=icon-medal></i>
                                    <h4 class=countup>20</h4>
                                    <p>Cups won
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 counter-item"><i class=icon-heart></i>
                                    <h4 class=countup>900</h4>
                                    <p>Likes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section grey-section">
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h5>Our testmonials</h5>
                            <h3>What our buyers say</h3>
                        </div>
                        <section class=testmonials-section>
                            <div class=row>
                                <div class="owl-carousel owl-theme" id=testmonials-carousel>
                                    <div class="item testmonial-item"><img alt=testmonial-image src=img/content/recourses/member1.jpg>
                                        <div class=content-testmonial-item>
                                            <h4>Abraham Harris</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                    <div class="item testmonial-item"><img alt=testmonial-image src=img/content/recourses/member2.jpg>
                                        <div class=content-testmonial-item>
                                            <h4>Anna Smith</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                    <div class="item testmonial-item"><img alt=testmonial-image src=img/content/recourses/member3.jpg>
                                        <div class=content-testmonial-item>
                                            <h4>Steve White</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class=block-section>
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h5>Our projects</h5>
                            <h3>Latest Projects</h3>
                        </div>
                        <div class=latest-projects>
                            <div class=center-holder id=filters><button class=isotop-button data-filter=*>Show all</button> <button class=isotop-button data-filter=.financical>Financical</button> <button class=isotop-button data-filter=.business>Business</button> <button class=isotop-button data-filter=.marketing>Marketing</button></div>
                            <div class=row>
                                <div class=isotope-grid>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item business">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p1(340x370) src=img/content/projects/project-1(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 1</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item business marketing">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p2(340x370) src=img/content/projects/project-2(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 2</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item financical marketing">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p3(340x370) src=img/content/projects/project-3(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 3</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item business financical">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p4(340x370) src=img/content/projects/project-4(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 4</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item marketing">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p5(340x370) src=img/content/projects/project-5(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 5</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item business financical">
                                        <a href=#>
                                            <div class=project-item>
                                                <div class=overlay-container><img alt=p6(340x370) src=img/content/projects/project-6(340x370).jpg>
                                                    <div class=project-item-overlay>
                                                        <h4>Project 6</h4>
                                                        <p>Lorem ipsum dolor sit amet
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section grey-section">
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h5>Team members</h5>
                            <h3>Meet our team</h3>
                        </div>
                        <div class="row mt-70">
                            <div class="col-xs-12 col-md-4 col-sm-12">
                                <div class=member-frame><img alt=team src=img/content/team/t2.jpg>
                                    <div class=team-overlay>
                                        <div class=team-overlay-text>
                                            <h4>Ann Hill</h4>
                                            <p>Marketing</p>
                                            <a href=# class="fa fa-facebook-official"></a>
                                            <a href=# class="fa fa-twitter"></a>
                                            <a href=# class="fa fa-instagram"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-12">
                                <div class=member-frame><img alt=team src=img/content/team/t1.jpg>
                                    <div class=team-overlay>
                                        <div class=team-overlay-text>
                                            <h4>Aaron Smith</h4>
                                            <p>Marketing</p>
                                            <a href=# class="fa fa-facebook-official"></a>
                                            <a href=# class="fa fa-twitter"></a>
                                            <a href=# class="fa fa-instagram"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-sm-12">
                                <div class=member-frame><img alt=team src=img/content/team/t6.jpg>
                                    <div class=team-overlay>
                                        <div class=team-overlay-text>
                                            <h4>Mary Morris</h4>
                                            <p>Marketing</p>
                                            <a href=# class="fa fa-facebook-official"></a>
                                            <a href=# class="fa fa-twitter"></a>
                                            <a href=# class="fa fa-instagram"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=block-section>
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h3>Some tools you'll need</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br>labore et dolore magna aliqua. Ut enim ad minim veniam
                        </div>
                        <div class=row>
                            <div class="mt-70 tabs tabs_animate">
                                <ul class="center-holder mb-70 tab-menu">
                                    <li><a href=#tab-1><i class=icon-video-camera aria-hidden=true></i>Intro Video</a>
                                        <li><a href=#tab-2><i class=icon-smartphone aria-hidden=true></i>Perfectly responsive</a>
                                            <li><a href=#tab-3><i class=icon-monitor aria-hidden=true></i>High quality</a>
                                </ul>
                                <div id=tab-1>
                                    <div class=col-md-12>
                                        <div class="image-shadow video-box video-md" style=background-image:url(img/content/backgrounds/building.jpg)> <button class=video-play-icon data-target=.video-modal data-toggle=modal></button>
                                            <div class="fade modal video-modal" id=videomodal role=dialog tabindex=-1>
                                                <div class="modal-dialog modal-lg" role=document><iframe allowfullscreen class="full-width image-shadow round-frame" height=415 src=https://www.youtube.com/embed/cIyVNoY3_L4> </iframe> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id=tab-2>
                                    <div class="col-xs-12 col-sm-6 col-md-6"><img alt=about src=img/content/mockups/iphone.png> </div>
                                    <div class="col-xs-12 col-md-5 col-sm-5 col-sm-offset-1">
                                        <div class=main-heading>
                                            <h5>About our company</h5>
                                            <h3>Inforamtion Section</h3>
                                        </div>
                                        <div class="mt-20 text-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                                    </div>
                                </div>
                                <div id=tab-3>
                                    <div class="col-xs-12 col-md-5 col-sm-5">
                                        <div class=main-heading>
                                            <h5>about sections</h5>
                                            <h3>Inforamtion Section</h3>
                                        </div>
                                        <div class="mt-20 text-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </div><a href=# class="button button-simple mb-20 mt-20">Learn more</a>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-1"><img alt=macbook src=img/content/mockups/imac.png class=image-shadow></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-section grey-section">
                    <div class=container>
                        <div class="center-holder main-heading">
                            <h3>Pricing Plan</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                <br>labore et dolore magna aliqua. Ut enim ad minim veniam
                        </div>
                        <div class=row>
                            <div class=mt-70>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <div class=pricing-box>
                                        <h4>Basic</h4><strong><sup>$</sup>29.9</strong>
                                        <ul>
                                            <li>24/7 Support
                                                <li>Unlimited Styles
                                                    <li>Regular Updates
                                                        <li>Strategic Development
                                        </ul><a href=# class="button button-simple full-width mt-30">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <div class=pricing-box>
                                        <h4>Business</h4><strong><sup>$</sup>39.9</strong>
                                        <ul>
                                            <li>24/7 Support
                                                <li>Unlimited Styles
                                                    <li>Regular Updates
                                                        <li>Strategic Development
                                        </ul><a href=# class="button button-simple full-width mt-30">Learn more</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <div class=pricing-box>
                                        <h4>Premium</h4><strong><sup>$</sup>59.9</strong>
                                        <ul>
                                            <li>24/7 Support
                                                <li>Unlimited Styles
                                                    <li>Regular Updates
                                                        <li>Strategic Development
                                        </ul><a href=# class="button button-simple full-width mt-30">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=block-section>
                    <div class=container>
                        <div class="owl-carousel owl-theme partners" id=our-partners>
                            <div class=item><img alt=partner-image src=img/content/partners/part-1.png> </div>
                            <div class=item><img alt=partner-image src=img/content/partners/part-2.png> </div>
                            <div class=item><img alt=partner-image src=img/content/partners/part-3.png> </div>
                            <div class=item><img alt=partner-image src=img/content/partners/part-4.png> </div>
                            <div class=item><img alt=partner-image src=img/content/partners/part-5.png> </div>
                            <div class=item><img alt=partner-image src=img/content/partners/part-6.png> </div>
                        </div>
                    </div>
                </div>
                <footer class=footer>
                    <div class=container>
                        <div class=row>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a href=#><img alt=logo src=img/logos/logo-2.png> </a>
                                <div class="text-content white-color">
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class=footer-heading>
                                    <h4>Contact Us</h4>
                                </div>
                                <div class=footer-contact>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i>West road, London, England Seram 113
                                            <li><i class="fa fa-clock-o"></i>Tusday-Monday : 9:00am-6:00pm
                                                <li><i class="fa fa-envelope-o"></i>Email: example@email.com
                                                    <li><i class="fa fa-phone"></i> Phone: +1-23-456789
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class=footer-heading>
                                    <h4>Categories</h4>
                                </div>
                                <div class="mt-20 footer-menu">
                                    <ul>
                                        <li><a href=about-company.html>About</a>
                                            <li><a href=services.html>Services</a>
                                                <li><a href=blog-grid.html>Blog</a>
                                                    <li><a href=contact.html>Contact</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class=footer-heading>
                                    <h4>Newsletter</h4>
                                </div>
                                <form class="footer-form mt-30"><input name=email placeholder="E-mail adress" type=email> <button class="button button-simple full-width">Subscribe</button></form>
                                <div class="center-holder footer-social-link mt-30">
                                    <ul>
                                        <li><a href=#><i class="fa fa-facebook"></i></a>
                                            <li><a href=#><i class="fa fa-twitter"></i></a>
                                                <li><a href=#><i class="fa fa-instagram"></i></a>
                                                    <li><a href=#><i class="fa fa-pinterest"></i></a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>        

    </div>

    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/swiper.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}" defer></script>
    <script src="{{ asset('js/wow.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('js/tabs.min.js') }}" defer></script>
    <script src="{{ asset('js/typed.js') }}" defer></script>
    <script src="{{ asset('js/modernizr.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>
</html>