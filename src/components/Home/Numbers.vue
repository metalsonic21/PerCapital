<template>
<div class="numbers-mine" style="background-color:#f4f4f4; ">
    <div class="container">
        <br>
        <div class="navy-line-2" style="opacity:0"></div>
        <h1 align="center" class="title-mine section-title-per">{{$t('numbers')}}</h1>
        <h6 align="center">{{$t('indicators')}}</h6>
        <br>
        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title">  {{$t('pib')}}</h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title">  {{$t('pob')}}</h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">─</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> {{$t('ri')}}</h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> {{$t('tc')}}</h4>
                <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> {{$t('te')}}</h4>
                        <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> IBC</h4>
                        <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> {{$t('co')}}</h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h4 class="text-center numbers-title"> {{$t('cv')}}</h4>
                    <hr>
                        <h5 class="no-margins text-center number-val">─</h5>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="ibox-sources">
                    <strong class="source-title">{{$t('sources')}} </strong>  
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

</style>
