<template>
<div class="animated fadeInRight">

    <div class="container">
        <h1 class="title-mine section-title-per mutual-title" align="center">{{$t('mutual')}}</h1>
        <br>
        <h2 align="center" class="title-mine section-title-per mutual-subtitle">{{$t('goal')}}</h2>

        <div class="row">
            <b-col cols="6" style="border-left:0px;border-top:0px;border-bottom:0px;border-right:3px;border-style:solid">
                <p>{{$t('goaldesc')}}</p>

            </b-col>
            <b-col cols="6">
                <p>{{$t('goaldesc2')}}</p>
            </b-col>
        </div>

        <div class="row mx-auto">
            <div class="col-lg-12">
                <br>
                <h4 align="center" class="title-mine section-title-per mutual-subtitle">{{$t('info')}}</h4>

                <b-list-group>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info1')}}
                        <b-badge class="tag-item">2020</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info2')}}

                        <b-badge class="tag-item">Índice general BVC</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info3')}}

                        <b-badge class="tag-item">BVC</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info4')}}

                        <b-badge class="tag-item">14:00 diario</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info5')}}

                        <b-badge class="tag-item">1 Unidad de Inversión</b-badge>
                    </b-list-group-item>
                </b-list-group>
            </div>
        </div>
    </div>
    <!-- RISKS -->
    <h1 class="title-mine section-title-per text-center">{{$t('risks')}}</h1>
    <section class="light-section">
        <div class="container">
            <div class="row ml-5">
                <b-col md="2" lg="2" sm="12">
                    <img alt="image" class="ml-4" src="img/content/icons/icon09.png" width="75" height="75">
                    <h4 class="title-mine section-title-per">{{$t('rg')}}</h4>
                    <div class="row" id="bubbles-row">
                        <div class="bubble">
                            {{$t('risk1')}}
                        </div>
                        <div class="comments-avatar">
                            <a href="" class="float-left">
                            </a>
                        </div>
                    </div>
                </b-col>

                <b-col md="2" lg="2" sm="12" class="ml-2">
                    <img alt="image" class="ml-4" src="img/content/icons/icon10.png" width="75" height="75">
                    <h4 class="title-mine section-title-per ml-4">{{$t('custody')}}</h4>
                    <div class="row">
                        <div class="bubble">
                            {{$t('risk2')}} <a href="http://www.cajavenezolana.com">{{$t('risk2a')}}</a>
                        </div>
                        <div class="comments-avatar">
                            <a href="" class="float-left">
                            </a>
                            <div class="media-body">
                                <div class="commens-name" style="margin-left:10px">
                                </div>
                            </div>
                        </div>
                    </div>

                </b-col>

                <b-col md="2" lg="2" sm="12" class="ml-1">
                    <img alt="image" class="ml-4" src="img/content/icons/icon11.png" width="75" height="75">
                    <h4 class="title-mine section-title-per text-center mr-4 risk-title">{{$t('country')}}</h4>
                    <div class="row" id="bubbles-row-2">
                        <div class="bubble">
                            {{$t('risk3')}}
                        </div>
                        <div class="comments-avatar">
                            <a href="" class="float-left">
                            </a>
                            <div class="media-body">
                                <div class="commens-name">
                                </div>
                            </div>
                        </div>
                    </div>

                </b-col>

                <b-col md="2" lg="2" sm="12" class="ml-1">
                    <img alt="image" src="img/content/icons/icon12.png" class="ml-4" style="margin-left:4px" width="75" height="75">
                    <h4 class="title-mine section-title-per">{{$t('coin')}}</h4>
                    <div class="row">
                        <div class="bubble">
                            {{$t('risk4')}}
                        </div>
                        <div class="comments-avatar">
                            <a href="" class="float-left">
                            </a>
                            <div class="media-body">
                                <div class="commens-name" style="margin-left:10px">
                                </div>
                            </div>
                        </div>
                    </div>

                </b-col>

                <b-col lg="2" md="2" sm="12" class="ml-1">
                    <img alt="image" class="ml-4" src="img/content/icons/icon13.png" width="75" height="75">
                    <h4 class="title-mine section-title-per ml-3">{{$t('volatil')}}</h4>
                    <div class="row" id="bubbles-row-3">
                        <div class="bubble">
                            {{$t('risk5')}}
                        </div>
                        <div class="comments-avatar">
                            <a href="" class="float-left">

                            </a>
                            <div class="media-body">
                                <div class="commens-name" style="margin-left:10px">
                                </div>
                            </div>
                        </div>
                    </div>

                </b-col>
            </div>
        </div>
    </section>

    <!-- HOW TO INVEST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <h1 class="text-center steps">1</h1>
                    <article class="hover-shadow article-block article-steps">
                        <h5 class="title-mine invest-title">{{$t('pi')}}</h5>
                        <p class="text-justify text-secondary text-invest">{{$t('pid')}}

                        </p>
                    </article>
                </div>

                <div class="col-md-3 col-sm-12">
                    <h1 class="text-center steps">2</h1>
                    <article class="hover-shadow article-block article-steps">
                        <h5 class="title-mine invest-title">{{$t('pli')}}</h5>

                        <p class="text-justify text-secondary text-invest">{{$t('plid')}}
                        </p>
                    </article>
                </div>

                <div class="col-md-3 col-sm-12">
                    <h1 class="text-center steps">3</h1>
                    <article class="hover-shadow article-block article-steps">
                        <h5 class="title-mine invest-title" style="margin-bottom:25px;">{{$t('fund')}}</h5>
                        <p class="text-justify text-secondary text-invest">{{$t('fundd')}}
                        </p>
                    </article>
                </div>

                <div class="col-md-3 col-sm-12">
                    <h1 class="text-center steps">4</h1>
                    <article class="hover-shadow article-block article-steps">
                        <h5 class="title-mine invest-title" style="margin-bottom:25px;">{{$t('register')}}</h5>
                        <p class="text-justify text-secondary text-invest">{{$t('registerd')}}
                        </p>
                        <a href="#" class="btn btn-secondary ml-2 btn-sub">{{$t('btnsubscribe')}}</a>
                    </article>
                </div>
            </div>

            <br>
            <div class="row justify-content-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary btn-title" style="margin-top:1px;">{{$t('btnprospect')}}</button>
                    <a href="#" class="btn btn-secondary ml-2 btn-title">{{$t('btnreports')}}</a>
                    <a href="#" class="btn btn-secondary ml-2 btn-title">{{$t('btnsubscribe2')}}</a>
                </div>
                <p class="text-justify invest-last invest-p text-dark">
                        {{$t('footer')}}
                    </p>
                    <br>
                    <p class="text-jusitfy invest-last invest-p text-dark"> <strong>{{$t('cfooter')}}</strong> info@percapital.com</p>
                    <br>
            </div>
        </div>
    </section>

    
</div>
</template>

<script>
</script>

<style>

</style>
