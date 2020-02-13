<template>
<div>

    <div class="container" style="margin-top:-6%;">
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-mine section-title-per" align="center"> <strong>DISTRIBUCIÓN POR SECTOR</strong></h1>

                </div>
            </div>

            <div class="container">
                <div class="row align-items-start ">
                    <div class="col-lg-6 col-md-6 col-sm-5 ibox-content ibox-mine">
                        <canvas id="myChart"></canvas>
                        <div class="row">
                            <img :src="link" class="thegraph-desc">
                            <img src="/img/content/landing/graph.png" class="thegraph">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-6 ibox-content col-two ibox-mine">
                        <b-img src="/img/content/icons/icon14.png" center height="75" width="75"></b-img>
                        <h1 class="text-center" style="font-size:25px!important"> <strong> <b> ¿Por qué un fondo mutual?</b></strong></h1>

                        <br>
                        <ul>
                            <li>Acceso a beneficios de portafolio Premium
                                con baja inversión.</li>
                            <li>Ganancias exentas de ISLR.</li>
                            <li>Analistas especializados dedicado a gestión
                                del portafolio.</li>
                            <li>Portafolio diversificado para mitigar riesgos.</li>
                            <li>Acceso a precios de economías de escala.</li>
                        </ul>

                        <div class="text-center">
                            <i class="fa fa-bar-chart fa-5x"></i>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
</template>

<script>
import {
    mapState
} from "vuex";
export default {
    mounted() {

    },
    data() {
        return {
            path: null,
        }
    },
    computed: {
        ...mapState(["slides"]),
        link() {
            return '/img/content/landing/' + this.slides.desc;
        }
    },
}
</script>

<style>

</style>
