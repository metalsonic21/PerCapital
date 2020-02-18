<template>
<div>
    <section class="animated fadeInRight" id="servicios">
        <h1 class="title-mine title-placed section-title-per text-center mutual-title">{{$t('navS')}}</h1>
        <br><br><br><br>
        <div class="gray-section-2">
            <div class="container">
                <div class="row">
                    <b-col sm="12" md="6" lg="6">
                        <br><br><br><br>
                        <h2 class="title-mine services-title">{{$t('a1tit')}}</h2>
                        <p class="services-text text-justify">
                            {{$t('a1')}}
                        </p>

                        <!-- Element to collapse -->
                        <b-collapse id="info1">
                            <p class="services-text text-justify">
                                {{$t('a11')}}
                            </p>

                            <p class="services-text text-justify">
                                <ul>
                                    <li>{{$t('a1l1')}}</li>
                                    <li>{{$t('a1l2')}}</li>
                                </ul>
                            </p>

                            <p class="services-text text-justify">
                                {{$t('a12')}}
                            </p>
                        </b-collapse>
                        <b-button class="btn-services" v-b-toggle.info1>&nbsp;{{$t('readmore')}}</b-button>
                    </b-col>

                    <b-col sm="12" md="6" lg="6">
                        <b-img fluid class="vertical-date img-mine" src="/img/content/landing/fondoA01SM.jpg"></b-img>

                    </b-col>
                </div>
            </div>
        </div>

        <div class="light-section-2">
            <div class="container">
                <div class="row">
                    <b-col sm="12" md="6" lg="6">
                        <br><br><br><br><br>
                        <h2 class="title-mine services-title">{{$t('a2tit')}}</h2>
                        <p class="services-text text-justify">{{$t('a2')}}</p>

                        <!-- Element to collapse -->
                        <b-collapse id="info2">
                            <p class="services-text text-justify">{{$t('a21')}}
                                <ul>
                                    <li>{{$t('a2l1')}}</li>
                                    <li>{{$t('a2l2')}}</li>
                                    <li>{{$t('a2l3')}}</li>
                                    <li>{{$t('a2l4')}}</li>
                                </ul>
                            </p>

                            <p class="services-text text-justify">{{$t('a22')}}

                            </p>
                        </b-collapse>
                        <b-button class="btn-services-2" v-b-toggle.info2>&nbsp;{{$t('readmore')}}</b-button>
                    </b-col>

                    <b-col sm="12" md="6" lg="6">
                        <b-img fluid class="vertical-date img-mine" src="/img/content/landing/fondoA02SM.jpg"></b-img>
                    </b-col>
                </div>
            </div>
        </div>

        <div class="gray-section-2">
            <div class="container">
                <div class="row">
                    <b-col sm="12" md="6" lg="6">
                        <br><br><br><br><br>
                        <h2 class="title-mine services-title">{{$t('a3tit')}}</h2>
                        <p class="services-text text-justify">{{$t('a3')}}</p>
                        <ul class="list-unstyled">
                            <li>{{$t('a3l1')}}</li>
                            <li>{{$t('a3l2')}}</li>
                        </ul>
                        <!-- Element to collapse -->
                        <b-collapse id="info3">
                            <p class="services-text text-justify">{{$t('a3l3')}}
                                <ul>
                                    <li>{{$t('a3l4')}}</li>
                                    <li>{{$t('a3l5')}}</li>
                                    <li>{{$t('a3l6')}}</li>
                                    <li>{{$t('a3l7')}}</li>
                                </ul>
                            </p>

                        </b-collapse>

                        <b-button class="btn-services" v-b-toggle.info3>&nbsp;{{$t('readmore')}}</b-button>


                    </b-col>

                    <b-col sm="12" md="6" lg="6">
                        <b-img fluid class="vertical-date img-mine" src="/img/content/landing/fondoA03SM.jpg"></b-img>
                    </b-col>
                </div>
            </div>
        </div>

        <div class="light-section-2">
            <div class="container">
                <div class="row">
                    <b-col sm="12" md="6" lg="6">
                        <br><br><br><br><br>
                        <h2 class="title-mine services-title">{{$t('a4tit')}}</h2>
                        <p class="services-text text-justify">{{$t('a4')}} {{$t('a4l1')}}</p>
                        <!-- Element to collapse -->
                        <b-collapse id="info4">
                            <p class="services-text text-justify">{{$t('a4rep')}}

                                <ul>
                                    <li>{{$t('a4l2')}}</li>
                                    <li>{{$t('a4l3')}}</li>
                                </ul>
                            </p>
                        </b-collapse>
                        <b-button class="btn-services-2" v-b-toggle.info4>&nbsp;{{$t('readmore')}}</b-button>

                    </b-col>

                    <b-col sm="12" md="6" lg="6">
                        <b-img fluid class="vertical-date img-mine" src="/img/content/landing/fondoA04SM.jpg"></b-img>
                    </b-col>
                </div>
            </div>
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
