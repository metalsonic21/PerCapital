<template>
<div class="mx-auto" id="carousel-container">
    <b-carousel id="carousel-1" v-model="slide" :interval="9000" controls style="text-shadow: 1px 1px 2px #333;" @sliding-start="onSlideStart" @sliding-end="onSlideEnd">
        <b-carousel-slide>
            <template v-slot:img>
                <img class="d-block img-fluid w-100" v-bind:src="imgPath(0)" alt="image slot">
            </template>
            <div class="container" id="hotlinks">
                <div class="row">
                    <div class="col-sm">
                        <div class="accordion float-right mt-2" id="accordionExample">
                            <div class="card">
                                <div class="card-header card-header-mine" id="headingOne">
                                    <h2 class="mb-0">
                                        <b-link v-b-toggle.menu-1 class="btn btn-link">
                                            <h5 class="card-title-mine" style="">Explorar Fondos</h5>
                                        </b-link>

                                    </h2>
                                </div>
                                <b-collapse id="menu-1">
                                    <ul class="list-unstyled">
                                        <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondo Mutual</a></li>
                                        <li class="list-group-item-card"> <a href="/mutual" style="color:white">Fondo Inmobiliario</a></li>
                                        <li class="list-group-item-card"> <a href="/mutual" style="color:white">Capital De Riesgo</a> </li>
                                    </ul>
                                </b-collapse>
                            </div>
                            <div class="card">
                                <div class="card-header card-header-mine" id="headingTwo">
                                    <h2 class="mb-0">
                                        <b-link v-b-toggle.menu-2 class="btn btn-link">
                                            <h5 class="card-title-mine">Explorar Servicios</h5>
                                        </b-link>
                                    </h2>
                                </div>
                                <b-collapse id="menu-2">
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li class="list-group-item-card"> <a href="/services" style="color:white">Administración E.I.C</a></li>
                                            <li class="list-group-item-card"> <a href="/services" style="color:white">Asesoría Financiera</a></li>
                                            <li class="list-group-item-card"> <a href="/services" style="color:white">Estructuración</a></li>
                                            <li class="list-group-item-card"> <a href="/services" style="color:white">Ingeniería Financiera</a></li>
                                        </ul>
                                    </div>
                                </b-collapse>
                            </div>
                            <div class="card">
                                <div class="card-header card-header-mine" id="headingThree">
                                    <h2 class="mb-0">
                                        <b-link href="about/#faq" class="btn btn-link">
                                            <h5 class="card-title-mine">Preguntas Frecuentes</h5>
                                        </b-link>
                                    </h2>
                                </div>
                            </div>
                            <button class="btn btn-per btn-lg btn-block">
                                <a href="#" style="color:white;">
                                    <h6 class="btn-text"> Suscríbete</h6>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </b-carousel-slide>

        <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment-->
        <b-carousel-slide>
            <template v-slot:img>
                <img class="d-block img-fluid w-100" v-bind:src="imgPath(1)" alt="image slot">
            </template>

        </b-carousel-slide>
    </b-carousel>
</div>
</template>

<script>
import {
    mapState
} from "vuex";
export default {
    data() {
        return {
            slide: 0,
            sliding: null,
        }
    },
    methods: {
        imgPath(index) {
            if (index == 0) {
                return require('../../../public/img/content/landing/'+this.slides.slide_one);
            } else if (index == 1) {
                return require('../../../public/img/content/landing/'+this.slides.slide_two);
            }
        },
        onSlideStart() {
            this.sliding = true
        },
        onSlideEnd() {
            this.sliding = false
        }
    },
    computed: {
        ...mapState(["slides"])
    },
}
</script>
