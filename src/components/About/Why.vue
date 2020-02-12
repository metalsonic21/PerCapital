<template>
<div>
    <!-- ABOUT -->

    <div id="empresa" class="about-mine animated fadeInRight">
        <div class=container>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-3 about-section">
                    <div class="main-heading">
                        <h1 class="title-mine section-title-per" style="margin-top:20px;">{{$t('why')}}</h1>
                    </div>
                    <div class="mt-20 text-content">
                        <p class="text-justify text-secondary">{{$t('whydesc')}}
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-2">
                    <article class="hover-shadow article-block article-mine"><img src="/img/content/icons/icon01.png" alt="Icono 3" width="75" height="75"><br><br>
                        <h5 class="title-mine">{{$t('w1')}}</h5>
                        <p class="text-justify text-secondary">{{$t('w1d')}}<br>{{$t('w1d1')}}

                        </p>
                    </article>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-2">
                    <article class="hover-shadow article-block article-mine"><img src="/img/content/icons/icon02.png" alt="Icono 3" width="75" height="75"><br><br>
                        <h5 class="title-mine">{{$t('w2')}}</h5>

                        <p class="text-justify text-secondary">{{$t('w2d')}}<br>{{$t('w2d1')}}
                        </p>
                    </article>
                </div>

                <div class="col-xs-12 col-md-3 col-sm-2">
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
