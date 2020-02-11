<template>
<div id="strats">
    <div>
        <h6 style="opacity:1;font-size:1px;">hi</h6>
    </div>

    <section class="features animated fadeInRight" id="strats">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line-3"></div>
                    <h1 class="title-mine section-title-per">{{$t('strats')}}</h1>

                </div>
            </div>
            <div class="row justify-content-center row-team row">

                <b-col cols="12" lg="12" md="12" class="col-lg-offset-1 features-text">
                
                        <p class="text-justify text-secondary">{{$t('stratsdesc')}}</p>
        
                    <h2 class="title-mine">{{$t('s1')}}</h2>
                    <font-awesome-icon icon="calculator" size="4x" class="float-right" style="color:grey"></font-awesome-icon>
                    <p class="text-secondary text-justify">{{$t('s1d')}}</p>
                </b-col>
            </div>

            <b-row class="justify-content-center row-team">
                <b-col cols="12" lg="12" md="12" class="col-lg-offset-1 features-text">
                    <h2 class="title-mine">{{$t('s2')}}</h2>
                    <font-awesome-icon icon="clock" size="4x" class="float-right" style="color:grey"></font-awesome-icon>
                    <p class="text-secondary text-justify">{{$t('s2d')}}</p>
                </b-col>
            </b-row>

            <b-row class="justify-content-center row-team">
                <b-col cols="12" lg="12" md="12" class="col-lg-offset-1 features-text">
                    <h2 class="title-mine">{{$t('s3')}}</h2>
                    <font-awesome-icon icon="clipboard" size="4x" class="float-right" style="color:grey"></font-awesome-icon>
                    <p class="text-secondary text-justify">
                        {{$t('s3d')}}
                        <br>
                        {{$t('s3d2')}}
                        </p>
                </b-col>
            </b-row>

            <b-row class="justify-content-center row-team">
                <b-col cols="12" lg="12" md="12" class="col-lg-offset-1 features-text">
                    <h2 class="title-mine">CAPITAL </h2>
                    <font-awesome-icon icon="money-bill" size="4x" class="float-right" style="color:grey"></font-awesome-icon>
                    <p class="text-secondary text-justify">
                        {{$t('s4d')}}</p>
                </b-col>
            </b-row>

            <b-row class="row justify-content-center" style="opacity:0;">
                <b-col cols="12" lg="12" md="12" class="col-lg-offset-1 features-text">
                    <h2 class="title-mine"></h2>
                    <p class="text-secondary"></p>
                </b-col>
            </b-row>
        </div>

    </section>
</div>

</template>

<script>
export default {
    
}
</script>

<style>
    .row-team{
        font-size: 14px;
    }
</style>