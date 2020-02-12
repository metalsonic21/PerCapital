<template>
<div>
    <div class="swiper-container">
        <div class="mytest">
        </div>
        <div class="swiper-wrapper">

            <div class="swiper-slide bg-two" style="background-image:url(img/content/landing/ns-1.jpg);" data-swiper-autoplay="9000"> <br>
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

</style>
