<template>
<div class="landing-page">

    <div id="caracteristicas">
        <div class=block-section>
            <div class=container>
                <div class="center-holder main-heading">
                    <h3 class="title-mine">FINALMENTE PUEDES EMPEZAR</h3>
                    <p class="text-center">PER CAPITAL ofrece fácil acceso a oportunidades de
                        inversión Premium
                        <br>
                        en el mercado de Capitales, Inmobiliario y
                        de Capital de Riesgo, previamente <br>
                        evaluadas y aprobadas por nuestros expertos, para inversionistas institucionales y público en general.</p>
                </div>
                <div class="container-fluid">
                    <div class=mt-70>
                        <div class=row>

                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-check" aria-hidden=true></i>
                                    <h4>TRANSPARENCIA</h4>
                                    <p>Somos una empresa regulada y cumplimos con los mayores estándares de cumplimiento para garantizar la tranquilidad a nuestros clientes. <br> <br> <br> </p>

                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-compass" aria-hidden=true></i>
                                    <h4>ANÁLISIS RIGUROSO</h4>
                                    <p>Nuestro equipo investiga y analiza para ti, hasta el más mínimo detalle de cada proyecto de inversión que ofrecemos. <br> <br> <br> <br> </p>
                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-bank" aria-hidden=true></i>
                                    <h4>FINANZAS INTELIGENTES</h4>
                                    <p>Estudiamos a fondo los proyectos y mercados buscando solvencia financiera, reputacional y excelencia en gestión empresarial con el objetivo de generar valor. </p>
                                </article>
                            </div>
                            <div class="col-md-3">
                                <article class="hover-shadow article-block article-landing"><i class="fa fa-money" aria-hidden=true></i>
                                    <h4>COMUNIDAD INVERSIONISTA</h4>
                                    <p>Construimos una comunidad de inversionistas institucionales y no institucionales que ofrece una alternativa de financiamiento. <br> <br> </p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Numbers></Numbers>
    <Contact></Contact>
    <Logos></Logos>
    <br>
</div>
</template>

<script>
export default {
    methods: {
        register(){
            window.location = "/register"
        },
    }
}
</script>

<style>
.myullandingp li {
    color: #ffffff;
}

/*INDICATORS*/

.list-group-mine .list-group-item {
    background-color: transparent;
    border-top-color: transparent;
    border-bottom: 1px solid #859da9;
    border-left-color: transparent;
    border-right-color: transparent;
}

.list-group-mine .list-group-item:hover {
    background-color: #859da9;
}

.fa-lock {
    color: black;
}

.fa-money {
    color: black;
}

.fa-bar-chart {
    color: black;
}

.grey-section-mine{
    margin-top: -175px;
}

.features-mine{
    margin-top: -5%;
}

.row-team{
    margin-top: -3%;
}

.comments-mine{
    margin-top: -3%;
}

.row-team{
    margin-bottom: -3%;
}

.article-landing{
    height:450px;
}
</style>
