<template>
<div class="numbers-mine" style="background-color:#f4f4f4; ">
    <div class="container">

        <div class="navy-line-2"></div>
        <h1 align="center" class="title-mine section-title-per">LOS NÚMEROS CUENTAN</h1>
        <h6 align="center">Indicadores:</h6>
        <br>
        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> PIB (%)</strong></h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">-25</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Población</strong></h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">28.067.000</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Reservas Internacionales</strong></h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">8.052.000</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Tasa de cambio Bs/$</strong></h4>
                <hr>
                        <h5 class="no-margins text-center number-val">28.954,71</h5>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Tasa de cambio Bs/€</strong></h4>
                        <hr>
                        <h5 class="no-margins text-center number-val">32.055,47</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> IBC</strong></h4>
                        <hr>
                        <h5 class="no-margins text-center number-val">0,9029 <em style="color:red;font-style:normal">-0,2100%</em></h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Cesta OPEP</strong></h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">60.337,76 <em style="color:green;font-style:normal">1,93%</em></h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> <strong> Cesta venezolana</strong></h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">357,40 $50,87</h5>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox-sources">
                    <strong class="source-title">Fuentes:</strong>
                    <b-link class="source-links" href="http://www.bcv.org.ve/estadisticas/reservas-internacionales">BCV</b-link>, <b-link class="source-links" href="https://www.reuters.com/quote/USDEUR">Reuters</b-link>, <b-link class="source-links" href="http://www.minpet.gob.ve/index.php/es-es/">IMF</b-link>, <b-link class="source-links" href="https://www.opec.org/opec_web/en/data_graphs/40.htm">OPEC</b-link>
                </div>

            </div>
        </div>

    </div>
    <hr>
</div>
</template>

<script>
export default {

}
</script>

<style>
.numbers-mine {
    margin-top: -8%;
}

.numbers-title {
    font-size: 16px;
}

.ibox-sources {
    font-size: 11px;
}

.number-val{
    font-size:17px !important;
}

.source-links {
    color: black;
}

.source-title {
    font-size: 11px;
}
</style>
