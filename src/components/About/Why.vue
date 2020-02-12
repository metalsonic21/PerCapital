<template>
<div>
    <!-- ABOUT -->

    <div id="empresa" class="about-mine animated fadeInRight">
        <div class=container>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12 about-section mx-4">
                    <div class="main-heading">
                        <h1 class="titleh1-new section-title-per text-center" style="margin-top:20px;">{{$t('why')}} <span style="color:#baccd5"><strong style="font-weight:700"> PER</strong></span><span style="color:#baccd5">CAPITAL?</span> </h1>
                    </div>
                    <div class="mt-20 text-content">
                        <p class="text-justify text-secondary text-about">{{$t('whydesc')}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <article class="hover-shadow article-block article-mine"><img src="/img/content/icons/icon01.png" alt="Icono 3" width="75" height="75"><br><br>
                        <h5 class="title-mine">{{$t('w1')}}</h5>
                        <p class="text-justify text-secondary">{{$t('w1d')}}<br>{{$t('w1d1')}}

                        </p>
                    </article>
                </div>

                <div class="col-md-4 col-sm-12">
                    <article class="hover-shadow article-block article-mine"><img src="/img/content/icons/icon02.png" alt="Icono 3" width="75" height="75"><br><br>
                        <h5 class="title-mine">{{$t('w2')}}</h5>

                        <p class="text-justify text-secondary">{{$t('w2d')}}<br>{{$t('w2d1')}}
                        </p>
                    </article>
                </div>

                <div class="col-md-4 col-sm-12">
                    <article class="hover-shadow article-block article-mine"><img src="/img/content/icons/icon03.png" alt="Icono 3" width="75" height="75"><br><br>
                        <h5 class="title-mine" style="margin-bottom:25px;">{{$t('w3')}}</h5>
                        <p class="text-justify text-secondary">{{$t('w3d1')}}<br>{{$t('w3d2')}}<br>{{$t('w3d3')}}
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {

}
</script>

<style>

</style>
