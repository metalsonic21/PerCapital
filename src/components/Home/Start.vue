<template>
<div class="landing-page">

    <div id="caracteristicas">
        <div class="block-section">
            <div class="container">
                <div class="center-holder main-heading">
                    <h3 class="title-mine section-title-per">{{$t('start')}}</h3>
                    <p class="text-center mr-5 ml-5">
                        {{$t('startdesc')}}
                        </p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <article class="hover-shadow article-block article-landing"><img src="/img/content/icons/ICON01.png" alt="Icono 1" width="75" height="75">
                                <h4>{{$t('strans')}}</h4>
                                <p>{{$t('stransd')}} <br> <br> <br> </p>

                            </article>
                        </div>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <article class="hover-shadow article-block article-landing"><img src="/img/content/icons/ICON02.png" alt="Icono 2" width="75" height="75">
                                <h4>{{$t('sanali')}}</h4>
                                <p>{{$t('sanalid')}} <br> <br> <br> <br> </p>
                            </article>
                        </div>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <article class="hover-shadow article-block article-landing"><img src="/img/content/icons/ICON03.png" alt="Icono 3" width="75" height="75">
                                <h4>{{$t('sfinance')}}</h4>
                                <p>{{$t('sfinanced')}} </p>
                            </article>
                        </div>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <article class="hover-shadow article-block article-landing"><img src="/img/content/icons/ICON04.png" alt="Icono 4" width="75" height="75">
                                <h4>{{$t('scomunidad')}}</h4>
                                <p>{{$t('scomunidadd')}} <br> <br> </p>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<br><br>
<!--
    <Numbers></Numbers>
    <div class="calculator-home">
        <Calculator></Calculator>
    </div>
    -->
    <br>
</div>
</template>

<script>
export default {
}
</script>

<style>

</style>
