<template>
<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-md-1">
                <h4 class="title-mine">FINANZAS INTELIGENTES</h4>
                <p class="text-justify" style="color:white">Ofrecemos servicios de administración de E.I.C.,
                    asesoría y consultoría en finanzas personales, corporativas e institucionales.
                </p>
                <small style="color:white;">Acceso a portafolios de inversión Premium para el pequeño y mediano inversionista.</small>
            </div>
            <div class="col-sm">
                <div class="accordion float-right mt-2" id="accordionExample">
                    <div class="card">
                        <div class="card-header card-header-mine" id="headingOne">
                            <h2 class="mb-0">
                                <b-link v-b-toggle.menu-1 class="btn btn-link">
                                    <h5 class="card-title-mine">Explorar fondos</h5>
                                </b-link>

                            </h2>
                        </div>
                        <b-collapse id="menu-1">
                            <ul class="list-unstyled">
                                <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondos Mutual</a></li>
                                <li class="list-group-item-card"> <a href="/FI" style="color:white">Fondo Inmobiliario</a></li>
                                <li class="list-group-item-card"> <a href="/riskcapital" style="color:white">Capital de riesgo</a> </li>
                            </ul>
                        </b-collapse>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-mine" id="headingTwo">
                            <h2 class="mb-0">
                                <b-link v-b-toggle.menu-2 class="btn btn-link">
                                    <h5 class="card-title-mine">Explorar servicios</h5>
                                </b-link>
                            </h2>
                        </div>
                        <b-collapse id="menu-2">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="list-group-item-card">Administración E.I.C</li>
                                    <li class="list-group-item-card">Asesoría financiera</li>
                                    <li class="list-group-item-card">Estructuración</li>
                                    <li class="list-group-item-card">Ingeniería financiera</li>
                                </ul>
                            </div>
                        </b-collapse>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-mine" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" aria-expanded="false">
                                    <a href="/about#faq" style="color:white">
                                        <h5 class="card-title-mine float-left">Preguntas frecuentes</h5>
                                    </a>
                                </button>
                            </h2>
                        </div>
                    </div>
                    <button class="btn btn-per btn-lg btn-block">
                        <a href="/register" style="color:white;">
                            <h6 class="btn-text"> Suscríbete</h6>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
</template>
