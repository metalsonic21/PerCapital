<template>
<div>
    <div class="swiper-container">
        <div class="mytest">
        </div>
        <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image:url(img/content/landing/ns-1.jpg);background-repeat:no-repeat;background-position:0px -100px;background-size:1750px 800px" data-swiper-autoplay="9000"> <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="accordion float-right mt-2" id="accordionExample">
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingOne">
                                        <h2 class="mb-0">
                                            <b-link v-b-toggle.menu-1 class="btn btn-link">
                                                <h5 class="card-title-mine">Explorar Fondos</h5>
                                            </b-link>

                                        </h2>
                                    </div>
                                    <b-collapse id="menu-1">
                                        <ul class="list-unstyled">
                                            <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondo Mutual</a></li>
                                            <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondo Inmobiliario</a></li>
                                            <li class="list-group-item-card"> <a href="/mutual" style="color:white">Capital De Riesgo</a> </li>
                                        </ul>
                                    </b-collapse>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingTwo">
                                        <h2 class="mb-0">
                                            <b-link v-b-toggle.menu-2 class="btn btn-link">
                                                <h5 class="card-title-mine">Explorar Servicios</h5>
                                            </b-link>
                                        </h2>
                                    </div>
                                    <b-collapse id="menu-2">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li class="list-group-item-card"> <a href="/services" style="color:white">Administración E.I.C</a></li>
                                                <li class="list-group-item-card"> <a href="/services" style="color:white">Asesoría Financiera</a></li>
                                                <li class="list-group-item-card"> <a href="/services" style="color:white">Estructuración</a></li>
                                                <li class="list-group-item-card"> <a href="/services" style="color:white">Ingeniería Financiera</a></li>
                                            </ul>
                                        </div>
                                    </b-collapse>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-mine" id="headingThree">
                                        <h2 class="mb-0">
                                            <b-link href="about/#faq" class="btn btn-link">
                                                <h5 class="card-title-mine">Preguntas Frecuentes</h5>
                                            </b-link>
                                        </h2>
                                    </div>
                                </div>
                                <button class="btn btn-per btn-lg btn-block">
                                    <a href="#" style="color:white;">
                                        <h6 class="btn-text"> Suscríbete</h6>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide bg-one" style="background-image:url(img/content/landing/ns-2.jpg);" data-swiper-autoplay="9000"> <br>
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
/* Slider backgrounds */
.bg-one {
    background-position: 0px -150px;
    background-repeat: no-repeat;
}

@media screen and (max-width:456px) {
 .bg-one {
    background-position: -450px -100px;
    background-repeat: no-repeat;
    background-size: 900px 700px;
}   
}

@media screen and (min-width:1209px) and (max-width: 1300px) {
 .bg-one {
    background-position: 0px -100px;
    background-size: 1300px 700px;
    background-repeat: no-repeat;
}   
}

@media screen and (min-width:1114px) and (max-width: 1208px) {
 .bg-one {
    background-position: -100px -150px;
    background-size: 1300px 800px;
    background-repeat: no-repeat;
}   
}

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
    .rowmine {
        margin-left: 220px !important;
        margin-top: 10px !important;
    }
}
</style>
