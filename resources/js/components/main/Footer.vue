<template>
<div>
<div class="block-section gray-section">
    <div class=container>
        <b-col cols="11" md="11">
        <div class="owl-carousel owl-theme partners" id=our-partners>
            <div class="item"><b-img alt=partner-image src=img/content/landing/bcv.png style="width:150px; height:150px;"> </b-img></div>
            <div class="item"><b-img alt=partner-image src="img/content/landing/bdv.png" style="width:150px; height:150px;"> </b-img></div>
            <div class="item"><b-img alt=partner-image src=img/content/landing/cvv.png style="width:150px; height:150px;"> </b-img></div>
            <div class="item"><b-img alt=partner-image src="img/content/landing/sunaval.png" style="width:150px; height:150px;"> </b-img></div>
        </div>
        </b-col>
    </div>
</div>

<footer class="footer">
    <b-container>
        <b-row>
            <b-col cols="3" md="3" sm="3" lg="3" xs="12">
                <b-img alt="logo" fluid src="/img/logo/PastedGraphic-1-3.jpeg"></b-img>
                <div class="text-content black-color">
                    <br>
                    <h5 class="h5-mine">0800-CAPITAL</h5>
                    <h5 class="h5-mine">info@percapital</h5>
                    <h5 class="h5-mine">Caracas-Venezuela</h5>
                </div>
            </b-col>

            <b-col cols="2" md="2" sm="3" lg="2" xs="12">
                <div class="footer-heading">
                    <h4 class="h4-mine" align="center"> <strong>La empresa</strong> </h4>
                </div>

                <div class="footer-contact">
                    <b-list-group class="list-group-footer">
                        <b-list-group-item> <strong>></strong> Por qué PER CAPITAL</b-list-group-item>
                        <b-list-group-item> <strong>></strong> Equipo </b-list-group-item>
                        <b-list-group-item> <strong>></strong> FAQ</b-list-group-item>
                    </b-list-group>
                </div>
            </b-col>

            <b-col cols="2" md="2" sm="3" lg="2" xs="12">
                <div class="footer-heading">
                    <h4 class="h4-mine" align="center"> <strong>Fondos</strong> </h4>
                </div>

                <div class="footer-contact">
                    <b-list-group class="list-group-footer">
                        <b-list-group-item><strong>></strong> Fondo Mutual</b-list-group-item>
                        <b-list-group-item><strong>></strong> Fondo Inmobiliario</b-list-group-item>
                        <b-list-group-item><strong>></strong> Capital de Riesgo</b-list-group-item>
                    </b-list-group>
                </div>
            </b-col>

            <b-col cols="2" md="2" sm="3" lg="2" xs="12">
                <div class="footer-heading">
                    <h4 class="h4-mine" align="center"> <strong>Servicios</strong></h4>
                </div>

                <div class="footer-contact">
                <b-list-group class="list-group-footer">
                    <b-list-group-item><strong>></strong> Administración E.I.C</b-list-group-item>
                    <b-list-group-item><strong>></strong> Asesoría Financiera</b-list-group-item>
                    <b-list-group-item><strong>></strong> Estructuración</b-list-group-item>
                    <b-list-group-item><strong>></strong> Ingeniería financiera</b-list-group-item>
                </b-list-group>
                </div>
            </b-col>

            <b-col cols="3" md="3" sm="3" lg="3" xs="12">
                <div class="footer-heading">
                    <h4 class="h4-mine" align="center"> <strong>Noticias</strong></h4>
                </div>

                <div class="footer-contact">
                    <b-list-group class="list-group-footer">
                        <b-list-group-item><strong>></strong>Trimestral</b-list-group-item>
                        <b-list-group-item><strong>></strong>Anual</b-list-group-item>
                    </b-list-group>
                </div>
            </b-col>
        </b-row>
    </b-container>
</footer>

<a href=# class=scroll-to-top><i class="fa fa-angle-up" aria-hidden=true></i></a>

</div>
</template>

<script>
export default {
}

</script>

<style>
.list-group-footer .list-group-item {
    background-color: transparent;
    border-top-color: transparent;
    border-bottom: transparent;
    border-left-color: transparent;
    border-right-color: transparent;
    font-size: 78%;
}

.h4-mine{
    font-size: 80%;
}

.h5-mine{
    font-size: 80%;
    color:black;
}
</style>