<!-- TEAM -->
<template>
<div id="team" class="gray-section">
    <div>
        <h6 style="opacity:1;font-size:1px;">hi</h6>
    </div>

    <section class="features animated fadeInRight" id="equipo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line-3"></div>
                    <h1 class="title-mine section-title-per">{{$t('team')}}</h1>

                </div>
            </div>

            <div class="row row-team">
                <b-col cols="10">
                    <p class="text-justify text-secondary features-text">{{$t('teamdesc')}}
                    </p>
                </b-col>
            </div>
            <div class="row justify-content-center row-team">

                <b-col cols="10" lg="10" md="10" class="col-lg-offset-1 features-text">

                    <h2 class="title-mine">{{$t('gg')}}</h2>

                    <p class="text-secondary">{{$t('ggd')}}</p>
                </b-col>

                <b-col cols="2">
                    <br><br>
                    <img src="/img/content/icons/icon04.png" alt="Icono 3" width="75" height="75"> </b-col>
            </div>

            <b-row class="justify-content-center row-team">
                <b-col cols="10" lg="10" md="10" class="features-text">
                    <h2 class="title-mine">{{$t('f')}}</h2>

                    <p class="text-secondary">{{$t('fd')}}</p>
                </b-col>

                <b-col cols="2">
                    <br><br>
                    <img src="/img/content/icons/icon05.png" alt="Icono 3" width="75" height="75"> </b-col>
            </b-row>

            <b-row class="justify-content-center row-team">
                <b-col cols="10" lg="10" md="10" class="features-text">
                    <h2 class="title-mine">{{$t('ac')}}</h2>
                    <p class="text-secondary">{{$t('acd')}}</p>
                </b-col>

                <b-col cols="2">
                    <br><br>
                    <img src="/img/content/icons/icon06.png" alt="Icono 3" width="75" height="75"> </b-col>
            </b-row>

            <b-row class="justify-content-center row-team">
                <b-col cols="10" lg="10" md="10" class="features-text">
                    <h2 class="title-mine">{{$t('fc')}}</h2>
                    <p class="text-secondary">{{$t('fcd')}}</p>
                </b-col>

                <b-col cols="2">
                    <br><br>
                    <img src="/img/content/icons/icon07.png" alt="Icono 3" width="75" height="75"> </b-col>
            </b-row>

            <b-row class="row justify-content-center">
                <b-col cols="10" sm="10" lg="10" md="10" class="features-text">
                    <h2 class="title-mine">LEGAL</h2>
                    <p class="text-secondary">{{$t('ld')}}</p>
                </b-col>

                <b-col cols="2" sm="2">
                    <br><br>
                    <img src="/img/content/icons/icon08.png" alt="Icono 3" width="75" height="75"> </b-col>
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

</style>
