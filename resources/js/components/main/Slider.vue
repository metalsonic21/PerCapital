<template>
<div>
    <div class=swiper-container>
        <div class=swiper-wrapper data-swiper-autoplay=2000>
            <div class=swiper-slide style=background-image:url(img/content/landing/slide-1.jpg)> <br>
                <h3 data-caption-animate=fadeInUp>Finanzas inteligentes</h3>
                <h5>El momento es ahora: Invierte, avanza</h5>
                <div class="container text-center">
                    <p class="text-light">
                        Ofrecemos servicios de administración de E.I.C, asesoría y consultoría en finanzas personales,<br>
                        corporativas e institucionales.<br><br>
                        Invierte, Avanza - Acceso a portafolios de inversión
                        Premium para el pequeño y mediano inversionista.</p>
                </div>
            </div>
            <div class=swiper-slide style=background-image:url(img/content/landing/slide-3.jpg)> <br>
                <h3 data-caption-animate=fadeInUp>Finalmente, puedes empezar</h3>
                <div class="container">
                    <h5>PER CAPITAL ofrece fácil acceso a oportunidades de inversión Premium en el<br>
                        mercado de Capitales, Inmobiliario y de Capital de Riesgo, previamente evaluadas<br>
                        y aprobadas por nuestros expertos, para inversionistas institucionales y público<br>
                        en general.
                    </h5>

                    <b-button variant="dark" href="#one" size="lg">Ver más</b-button>
                </div>

            </div>

            <div class=swiper-slide style=background-image:url(img/content/landing/slide-2.jpg)> <h3 data-caption-animate=fadeInUp>Elige tu perfil de inversionista</h3>
                <b-container>
                    <b-row>
                        <b-col cols="6" md="6" sm="6">
                            <b-card>
                                <h4 style="color:black;">Institucional</h4>
                                <b-card-text>
                                    Banco, Casas de Bolsa, Sociedad
                                    de Corretaje, Asesor de Inversión, Seguro

                                </b-card-text>

                                <b-button variant="dark">Seleccionar</b-button>
                            </b-card>
                        </b-col>
                        <b-col cols="6" md="6" sm="6">
                            <b-card >
                                <h4 style="color:black;">Privado</h4>
                                <b-card-text>
                                    Persona natural o Jurídica en general
                                </b-card-text>

                                <b-button variant="dark">Seleccionar</b-button>
                            </b-card>
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

}
</script>
