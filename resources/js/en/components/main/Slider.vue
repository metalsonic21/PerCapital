<template>
<div>
    <div class="swiper-container">
        <div class="mytest">
        </div>
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image:url(img/content/landing/slide-1.jpg)" data-swiper-autoplay="9000"> <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-md-1">
                            <h4 class="title-mine">SMART FINANCE</h4>
                            <p class="text-justify" style="color:white">We offer asset management and administration services, advice and consulting in personal and corporate finance.
                            </p>
                        </div>
                        <div class="col-sm">
                            <div class="accordion float-right mt-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingOne">
                                        <h2 class="mb-0">
                                            <b-link v-b-toggle.menu-1 class="btn btn-link">
                                                <h5 class="card-title-mine">Explore Funds</h5>
                                            </b-link>

                                        </h2>
                                    </div>
                                    <b-collapse id="menu-1">
                                        <ul class="list-unstyled">
                                            <li class="list-group-item-card"> <a href="/en/mutual" style="color:white">Mutual Fund</a></li>
                                            <li class="list-group-item-card"> <a href="#" style="color:white">Real State Fund</a></li>
                                            <li class="list-group-item-card"> <a href="#" style="color:white">Venture Capital</a> </li>
                                        </ul>
                                    </b-collapse>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingTwo">
                                        <h2 class="mb-0">
                                            <b-link v-b-toggle.menu-2 class="btn btn-link">
                                                <h5 class="card-title-mine">Explore Services</h5>
                                            </b-link>
                                        </h2>
                                    </div>
                                    <b-collapse id="menu-2">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="list-group-item-card">Asset Management</li>
                                                <li class="list-group-item-card">Financial Advisory</li>
                                                <li class="list-group-item-card">Structuring</li>
                                                <li class="list-group-item-card">Financial Engineering</li>
                                            </ul>
                                        </div>
                                    </b-collapse>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" aria-expanded="false">
                                                <a href="/about#faq" style="color:white">
                                                    <h5 class="card-title-mine float-left">FAQ</h5>
                                                </a>
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                                <button class="btn btn-per btn-lg btn-block">
                                    <a href="/register" style="color:white;">
                                        <h6 class="btn-text"> Susbcribe</h6>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" style="background-image:url(img/content/landing/slide-3.jpg)" data-swiper-autoplay="9000"> <br>
                <div class="container">
                    <div class="row mx-auto my-auto rowmine">
                        <div class="col-lg-10">
                            <h4 class="title-mine">ACCESS TO PREMIUM INVESTMENT OPPORTUNITIES FOR SMALL AND MEDIUM INVESTORS</h4>
                        </div>
                    </div>
                </div>
                        
            </div>

        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
</template>

<script>
export default {}
</script>

<style>
.mytest {
    position: absolute;
    left: 130px;
    top: 70px;
    z-index: 2;
}

.bg-secondary {
    background-color: rgba(108, 117, 125, 0.6) !important;
}

.card {
    width: 400px;
    background-color: rgba(133, 157, 169, 0.6) !important;
}

.card-header-mine {
    height: 50px !important;
}

@media (max-width: 767px) {
    .card-title-mine {
        color: white !important;
        margin-top: 0px;
        margin-left: 100px;
        font-family: Gotham;
        font-size: 14px;
    }

    .list-group-item-card {
        margin-left: 100px;
    }

    .btn-text {
        margin-left: 100px;
    }
}

@media (min-width: 768px) {
    .card-title-mine {
        color: white !important;
        margin-top: -50px;
        font-family: Gotham;
        font-size: 14px;
    }
}

.list-group-item-card {
    font-size: 16px;
    color: white;
}

.card-body {
    margin-bottom: -4px !important;
}

.btn-per {
    color: #fff;
    background-color: #859da9;
    border-color: #859da9;
}

.btn-per:hover,
.btn-per:focus,
.btn-per.focus {
    background-color: rgb(108, 117, 125);
    border-color: #859da9;
    color: #FFFFFF;
}

.btn-per:not(:disabled):not(.disabled):active,
.btn-per:not(:disabled):not(.disabled).active,
.show>.btn-per.dropdown-toggle {
    color: #fff;
    background-color: #859da9;
    border-color: #859da9;
}

.btn-text {
    font-size: 18px;
    color: white;
}

@media screen and (min-width: 1150px) {
.rowmine{
    margin-left:220px !important;
    margin-top: 10px !important;
}    
}

</style>
