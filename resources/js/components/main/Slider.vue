<template>
<div>
    <div class=swiper-container>
        <div class=swiper-wrapper data-swiper-autoplay=2000>

            <div class=swiper-slide style=background-image:url(img/content/landing/slide-1.jpg)> <br>
                <!--
                <h3 data-caption-animate=fadeInUp>Finalmente, puedes empezar</h3> -->
                <div class="container">
                    <b-col cols="4" md="4" sm="3" class="float-right">
                        <b-list-group style="background-color:transparent" class="text-light list-group-mine">

                            <b-list-group-item align="left" @click="faq"><strong>></strong> FAQ</b-list-group-item>
                            <b-list-group-item align="left" @click="services"><strong>></strong> Servicios</b-list-group-item>

                        </b-list-group>

                    </b-col>
                </div>

            </div>

            <div class=swiper-slide style="background-image:url(img/content/landing/slide-3.jpg)"> <br>
                <b-col cols="7" md="7" class="mx-auto my-auto">

                    <div class="text-light bg-secondary">
                        <h3>Finanzas inteligentes</h3>
                        <h5>Ofrecemos servicios de administración de E.I.C, asesoría y consultoría en finanzas personales, coporativas e institucionales <br>
                        </h5>
                    </div>
                </b-col>

                <b-col cols="6" md="6" class="mx-auto my-auto">

                    <div class="bg-secondary text-light">
                        <h4>PER CAPITAL Fondo Mutual</h4>
                    </div>

                </b-col>

            </div>

            <div class=swiper-slide style=background-image:url(img/content/landing/slide-2.jpg)> <h3 data-caption-animate=fadeInUp>Elige tu perfil de inversionista</h3>
                <b-container>
                    <b-row>
                        <b-col cols="6" md="6" sm="6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="container">
                                        <br>
                                        <h4 style="color:black;">Institucional</h4>
                                        <b-card-text>
                                            Banco, Casas de Bolsa, Sociedad
                                            de Corretaje, Asesor de Inversión, Seguro

                                        </b-card-text>

                                        <b-button variant="dark">Seleccionar</b-button>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </b-col>
                        <b-col cols="6" md="6" sm="6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="container">
                                        <br>
                                        <h4 style="color:black;">Privado</h4>

                                        <b-card-text>
                                            Persona natural o Jurídica en general
                                            <br> <br>
                                        </b-card-text>

                                        <b-button variant="dark">Seleccionar</b-button>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </b-col>
                    </b-row>
                </b-container>
            </div>

            <div class=swiper-slide style=background-image:url(img/content/landing/slide-4.jpg)> <h3 data-caption-animate=fadeInUp>Aviso legal</h3>
                <h5>“No debe suponerse ni debe asegurarse que las operaciones recomendadas producirán efectivamente <br>
                    los beneficios actualmente estimados, ni que los respectivos valores tendrán en el futuro un <br>
                    comportamiento similar a aquel que fundamento la presente recomendación”<br><br>
                    <i>Normas Relativas a la Autorización y Registro de los Corredores Públicos<br>
                        de Valores y Asesores de Inversión. Sección V, Articulo 28.
                    </i></h5>
            </div>

        </div>
        <div class=swiper-pagination></div>
        <div class=swiper-button-next></div>
        <div class=swiper-button-prev></div>
    </div>
</div>
</template>

<script>
export default {
    methods: {
        faq() {
        axios.get('/faq')

            .then(res => {
                window.location = "/faq";
            })
        },
        services(){
        axios.get('/services')

            .then(res => {
                window.location = "/services";
            })
        }
    }
}
</script>

<style>
.bg-secondary {
    background-color: rgba(108, 117, 125, 0.6) !important;
}

.card {
    background-color: rgba(255, 255, 255, 0.6) !important;
}

.card-block {
    background-color: rgba(255, 255, 255, 0.6) !important;

}
</style>
