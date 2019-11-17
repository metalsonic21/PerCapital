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
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="card-title-mine"> Explorar fondos</h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <ul class="list-unstyled">
                                <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondos Mutual</a></li>
                                <li class="list-group-item-card"> <a href="/FI" style="color:white">Fondo Inmobiliario</a></li>
                                <li class="list-group-item-card"> <a href="/riskcapital" style="color:white">Capital de riesgo</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-mine" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="card-title-mine">Explorar servicios</h5>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li class="list-group-item-card">Administración E.I.C</li>
                                    <li class="list-group-item-card">Asesoría financiera</li>
                                    <li class="list-group-item-card">Estructuración</li>
                                    <li class="list-group-item-card">Ingeniería financiera</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-header-mine" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="card-title-mine float-left">Preguntas frecuentes</h5>
                                </button>
                            </h2>
                        </div>
                    </div>
                    <button class="btn btn-per btn-lg btn-block">
                        <h6 class="btn-text"> Suscríbete</h6>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
</template>
