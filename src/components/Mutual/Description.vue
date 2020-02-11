<template>
<div class="animated fadeInRight">

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-7">
                <div class="row">

                    <h1 class="title-mine section-title-per">PER CAPITAL </h1>
                </div>
                <div class="row">

                    <h1 class="title-mine section-title-per">{{$t('mutual')}}</h1>
                </div>

            </div>
            <div class="col-lg-2 col-md-5 mt-4">
                <b-list-group>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('mutuall')}}
                        <b-row>
                        <b-badge variant="dark">Bs 50.000</b-badge>
                        </b-row>
                    </b-list-group-item>
                </b-list-group>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="center-holder main-heading text-justify">
                    <br>
                    <h4 align="center" class="title-mine section-title-per">{{$t('goal')}}</h4>
                    <p>{{$t('goaldesc')}}</p>
                </div>
                <div class="text-center">
                    <small align="center">{{$t('f17')}}</small>
                </div>

            </div>
            <div class="col-lg-6">
                <br>
                <h4 align="center" class="title-mine section-title-per">{{$t('info')}}</h4>

                <b-list-group>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info1')}}
                        <b-badge variant="dark">2020</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info2')}}

                        <b-badge variant="dark">Índice general BVC</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info3')}}

                        <b-badge variant="dark">BVC</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info4')}}

                        <b-badge variant="dark">14:00 diario</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        {{$t('info5')}}

                        <b-badge variant="dark">1 Unidad de Inversión</b-badge>
                    </b-list-group-item>
                </b-list-group>
            </div>
        </div>
    </div>

    <!-- RISKS -->
    <section class="gray-section" style="margin-top: 1%; margin-bottom:-92px">
        <div class="container">
            <div class="row" id="big-row">
                <div class="col-lg-6" id="risks-col">
                    <div class="text-center">
                        <div class="navy-line-3"></div>
                        <h1 class="title-mine section-title-per">{{$t('risks')}}</h1>
                    </div>

                    <div class="row" id="bubbles-row">
                        <div class="col-lg-6">
                            <div class="bubble">
                                {{$t('risk1')}}
                            </div>
                            <div class="comments-avatar">
                                <a href="" class="float-left">
                                    <img alt="image" src="img/content/landing/warning.png">
                                </a>
                                <div class="media-body">
                                    <div class="commens-name">
                                        {{$t('rg')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="bubble">
                                {{$t('risk2')}} <a href="http://www.cajavenezolana.com">{{$t('risk2a')}}</a>
                            </div>
                            <div class="comments-avatar">
                                <a href="" class="float-left">
                                    <font-awesome-icon icon="lock" size="2x"></font-awesome-icon>
                                </a>
                                <div class="media-body">
                                    <div class="commens-name" style="margin-left:10px">
                                        {{$t('custody')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="bubbles-row-2">
                        <div class="col-lg-6">
                            <div class="bubble">
                                {{$t('risk3')}}
                                </div>
                            <div class="comments-avatar">
                                <a href="" class="float-left">
                                    <img alt="image" src="img/content/landing/globe.png">
                                </a>
                                <div class="media-body">
                                    <div class="commens-name">
                                        {{$t('country')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="bubble">
                                {{$t('risk4')}}
                                </div>
                            <div class="comments-avatar">
                                <a href="" class="float-left">
                                    <font-awesome-icon icon="money-bill" size="2x" style="color:black"></font-awesome-icon>
                                </a>
                                <div class="media-body">
                                    <div class="commens-name" style="margin-left:10px">
                                        {{$t('coin')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="bubbles-row-3">
                        <div class="col-lg-6">
                            <div class="bubble">
                                {{$t('risk5')}}
                               </div>
                            <div class="comments-avatar">
                                <a href="" class="float-left">
                                    <font-awesome-icon icon="chart-bar" size="3x" style="color:black"></font-awesome-icon>
                                </a>
                                <div class="media-body">
                                    <div class="commens-name" style="margin-top:10px;margin-left:10px">
                                        {{$t('volatil')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- HOW TO INVEST -->
                <div class="col-lg-6" id="invest-col">
                    <div class="text-center">
                        <div class="navy-line-3"></div>
                        <h1 class="title-mine section-title-per">{{$t('howt')}}</h1>
                    </div>

                    <div class="invest-items-bg">

                        <p class="text-justify invest-last invest-p text-dark">{{$t('howtd')}}
                        </p>
                        <div class="row" style="margin-top:1px;">
                            <div class="col-lg-12">
                                <h6 class="text-center invest-title"> <b> {{$t('pi')}}</b></h6>
                                <p class="text-justify invest-last invest-p text-dark">{{$t('pid')}}</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="text-center invest-title"> <b> {{$t('pli')}}</b></h6>
                                <p class="text-justify invest-last invest-p text-dark">{{$t('plid')}}</p>
                                <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="text-center invest-title"> <b> {{$t('fund')}}</b></h6>
                                <p class="text-justify invest-last invest-p text-dark">{{$t('fundd')}}</p>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h6 class="text-center invest-title"> <b> {{$t('register')}}</b></h6>
                                <p class="text-justify invest-last invest-p text-dark">{{$t('registerd')}}
                                </p>
                                <p class="text-center">
                                    <a class="navy-link" style="font-size:16px;" href="#">{{$t('clickhere')}} &raquo;</a>
                                </p>
                                <br>
                            </div>
                        </div>
                        <p class="text-justify invest-last invest-p text-dark">
                            {{$t('footer')}}
                        </p>
                        <br>
                        <p class="text-jusitfy invest-last invest-p text-dark"> <strong>{{$t('cfooter')}}</strong> info@percapital.com</p>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary btn-title" style="margin-top:1px;">{{$t('btnprospect')}}</button>
                                    <a href="#" class="btn btn-secondary ml-2 btn-title">{{$t('btnreports')}}</a>
                                    <a href="#" class="btn btn-secondary ml-2 btn-title">{{$t('btnsubscribe')}}</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <Graph></Graph>
    </section>

    <br><br><br>

</div>
</template>

<script>
</script>

<style>

</style>
