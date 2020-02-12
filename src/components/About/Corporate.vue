<template>
<div class="animated fadeInRight" id="corporate">
    <div class=container>
        <div class=row>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="navy-line-2" style="margin-top:20px;"></div>
                <h1 class="title-mine text-center section-title-per">{{$t('corporate')}}</h1>

                <div class=text-content>
                    <p>{{$t('corporatedesc')}}</p>
                </div>
                <div class=row>
                    <div class="col-xs-12 col-md-6 col-sm-12">
                        <div class="clearfix service-box" style="height:230px;">
                            <div class=box-icon>
                                <font-awesome-icon icon="file" size="3x" style="color:grey"></font-awesome-icon>
                            </div>
                            <div class=box-content>
                                <br>
                                <h5 class="gov-title">{{$t('g1')}}</h5>
                                <p class="gov-text">{{$t('g1d')}}</p>
                                <small>177 KB</small>
                                <div class="center">
                                    <a :href="require('../../../public/docs/Guia.pdf')" download>
                                        <b-button class="btn-title" size="sm">{{$t('btndownload')}}</b-button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-sm-12">
                        <div class="clearfix service-box" style="height:230px;">
                            <div class=box-icon>                                
                                <font-awesome-icon icon="file" size="3x" style="color:grey"></font-awesome-icon>
                            </div>
                            <div class=box-content>
                                <br>
                                <h5 class="gov-title">{{$t('g2')}}</h5>
                                <p class="gov-text">{{$t('g1d')}}</p>
                                <small>173 KB</small>
                                <div class="center">
                                    <a :href="require('../../../public/docs/Conducta.pdf')" download>
                                        <b-button class="btn-title" size="sm">{{$t('btndownload')}}</b-button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
