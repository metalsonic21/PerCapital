<template>
<div id="faq" class="light-section animated fadeInRight faq-mine">
    <b-container>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="row faq-item-mine">
                        <div class="col-lg-12 text-center">
                            <div class="navy-line" style="opacity:0"></div>
                            <h1 align="center" class="title-mine section-title-per">{{$t('faqtit')}}</h1>
                            <small align="center">{{$t('faqhelp')}}</small>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-1 class="faq-question">{{$t('q1')}}</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">{{$t('navS')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-1" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r1')}}
                                        </p>
                                        <br>
                                        <p><strong>{{$t('r1c')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r1cl')}}</li>
                                                <li>{{$t('r1cl1')}}</li>
                                                <li>{{$t('r1cl2')}}</li>
                                                <li>{{$t('r1cl3')}}</li>
                                                <li>{{$t('r1cl4')}}</li>
                                                <li>{{$t('r1cl5')}}</li>
                                                <li>{{$t('r1cl6')}}</li>
                                            </ul>
                                        </p>

                                        <p> <strong>{{$t('r1np')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r1npl')}}</li>
                                                <li>{{$t('r1npl1')}}</li>
                                                <li>{{$t('r1npl2')}}</li>
                                                <li>{{$t('r1npl3')}}</li>
                                            </ul>
                                        </p>

                                        <p> <strong>{{$t('r1m')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r1ml')}}</li>
                                                <li>{{$t('r1ml1')}}</li>
                                                <li>{{$t('r1ml2')}}</li>
                                                <li>{{$t('r1ml3')}}</li>
                                                <li>{{$t('r1ml4')}}</li>
                                                <li>{{$t('r1ml5')}}</li>
                                                <li>{{$t('r1ml6')}}</li>
                                                <li>{{$t('r1ml7')}}</li>
                                                <li>{{$t('r1ml8')}}</li>
                                                <li>{{$t('r1ml9')}}</li>
                                                <li>{{$t('r1ml10')}}</li>

                                            </ul>

                                        </p>

                                        <p> <strong>{{$t('r1ca')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r1cal')}}</li>
                                                <li>{{$t('r1cal1')}}</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-2 class="faq-question">{{$t('q2')}}</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">{{$t('navS')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-2" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r2')}}
                                        </p>

                                        <p>{{$t('r2p')}}</p>
                                        <p>{{$t('r2p2')}}</p>
                                        <p>{{$t('r2p3')}}</p>

                                        <p> <strong>{{$t('r1c')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r2c')}}</li>
                                                <li>{{$t('r2c1')}}</li>
                                                <li>{{$t('r2c2')}}</li>
                                                <li>{{$t('r2c3')}}</li>
                                                <li>{{$t('r2c4')}}</li>
                                                <li>{{$t('r2c5')}}</li>
                                                <li>{{$t('r2c6')}}</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>

                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-3 class="faq-question">{{$t('q3')}}</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">{{$t('navF')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-3" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r3')}}</p>

                                        <p> <strong>{{$t('r1c')}}</strong> </p>

                                        <p>
                                            <ul>
                                                <li>{{$t('r3c')}}</li>
                                                <li>{{$t('r3c1')}}</li>
                                                <li>{{$t('r3c2')}}</li>
                                            </ul>
                                        </p>

                                        <p> <strong>{{$t('r3p')}}</strong> </p>
                                        <p>
                                            <ul>
                                                <li>{{$t('r3p1')}}</li>
                                                <li>{{$t('r3p2')}}</li>
                                                <li>{{$t('r3p3')}}</li>
                                                <li>{{$t('r3p4')}}</li>
                                                <li>{{$t('r3p5')}}</li>
                                                <li>{{$t('r3p6')}}</li>
                                            </ul>
                                        </p>

                                        <p>
                                            {{$t('r3b')}} <strong>{{$t('r3b2')}} </strong>{{$t('r3b3')}}
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-4 class="faq-question">{{$t('q4')}}</b-link>
                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">{{$t('navF')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-4" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r4')}}</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-5 class="faq-question">{{$t('r5')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                    <span class="tag-item">{{$t('navS')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <b-collapse id="faq-5" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p><ul><li>{{$t('r5')}}</li>
                                                <li>{{$t('r51')}}</li>
                                                <li>{{$t('r52')}}</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-6 class="faq-question">{{$t('q6')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-6" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r6')}}</p>
                                        <p>{{$t('r6p')}}</p>
                                        <p>{{$t('r6p2')}}</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-7 class="faq-question">{{$t('q7')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-7" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r7')}}</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-8 class="faq-question">{{$t('q8')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <b-collapse id="faq-8" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r8')}}</p>
                                    </div>
                                </b-collapse>

                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-9 class="faq-question">{{$t('q9')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-9" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p><strong>{{$t('r9i')}}</strong>
                                            <ul>
                                                <li>{{$t('r9i1')}}</li>
                                                <li>{{$t('r9i2')}}</li>
                                            </ul>
                                        </p>

                                        <p>
                                            <strong>{{$t('r9e')}}</strong>
                                            <ul>
                                                <li>{{$t('r9e1')}}</li>
                                                <li>{{$t('r9e2')}}</li>
                                                <li>{{$t('r9e3')}}</li>
                                            </ul>
                                        </p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-10 class="faq-question">{{$t('q10')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-10" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r10')}}</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="row">
                            <div class="col-md-7">
                                <b-link v-b-toggle.faq-11 class="faq-question">{{$t('q11')}}</b-link>

                            </div>
                            <div class="col-md-3 offset-md-2">
                                <div class="tag-list">
                                    <span class="tag-item">General</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <b-collapse id="faq-11" class="panel-collapse">
                                    <div class="faq-answer">
                                        <p>{{$t('r11')}} <strong>intriint@seniat.gob.ve</strong> {{$t('r11n')}}</p>
                                    </div>
                                </b-collapse>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </b-container>

</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
