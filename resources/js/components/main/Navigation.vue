<template>
<div>
    <div class=hidden-xs id=top-bar>
        <div class=container>
            <div class="col-xs-12 col-md-12">
                <ul class=top-bar-info>
                    <li v-bind:style="dynamicColorR">ABC.A 22.500,00</li>
                    <li>BNC 332,50</li>
                    <li>BOU 7,00</li>
                    <li>BPV 88.500</li>
                    <li>BVCC 7.230,00</li>
                    <li v-bind:style="dynamicColorG">BVL 900,00</li>
                    <li>CCR 105.000,00</li>
                    <li>CGQ 12.500,00</li>
                    <li>CIE 515,00</li>
                    <li>CRM.A 22.750,00</li>
                    <li>DOM 13.300,00</li>
                </ul>
            </div>

            <div class="container">
                <div class="w-50 mx-auto">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <ul class="top-bar-info">
                                <li v-bind:style="dynamicColorR">EFE 1.350,00</li>
                                <li>ENV 7.000,00</li>
                                <li>FNC 10.259,50</li>
                                <li>FBV 0,25</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>


            <b-navbar toggleable="lg"
            fixed sticky class="mx-5">
                <b-navbar-brand href="#" class="ml-5">
                    <b-img src="/img/logo/PastedGraphic-1-3.jpeg" width="220" height="110"></b-img>
                </b-navbar-brand>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            
                <b-collapse id="nav-collapse" is-nav>
                    

                    <b-navbar-nav class="ml-auto">
                        <b-nav-item href="#empresa">La empresa</b-nav-item>
                        <b-nav-item href="#fondos">Fondos</b-nav-item>
                        <b-nav-item href="#">Servicios</b-nav-item>
                        <b-nav-item href="#">Reportes y noticias</b-nav-item>
                        <b-nav-item href="#">Contacto</b-nav-item>
                        <b-nav-item-dropdown text="Idioma" right>
                            <b-dropdown-item href="#">Español</b-dropdown-item>
                            <b-dropdown-item href="#">Inglés</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <b-nav-item-dropdown text="Inversionista" right>
                            <b-dropdown-item href="#">Institucional</b-dropdown-item>
                            <b-dropdown-item href="#">Privado</b-dropdown-item>
                        </b-nav-item-dropdown>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
            <br>

    </header>
</div>
</template>

<script>
export default {
    data() {
        return {
            dynamicColorR: {
                color: 'red'
            },
            dynamicColorG: {
                color: '#16bb05'
            }
        }
    }
}
</script>
