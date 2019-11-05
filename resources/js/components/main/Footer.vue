<template>
<div>
    <div class="container">
        <!-- Footer -->
        <footer class="page-footer font-small indigo">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center" style="color:black">La empresa</h5>
                        <ul class="list-unstyled text-center">
                            <li>
                                <a href="#empresa" style="color:black">Por qué PER CAPITAL</a>
                            </li>
                            <li>
                                <a href="#equipo" style="color:black">Equipo</a>
                            </li>
                            <li>
                                <a @click="faq" style="color:black">FAQ</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center" style="color:black">Fondos</h5>
                        <ul class="list-unstyled text-center">
                            <li>
                                <a href="#!" style="color:black">Fondo Mutual</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Fondo Inmobiliario</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Capital de Riesgo</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center" style="color:black">Servicios</h5>
                        <ul class="list-unstyled text-center">
                            <li>
                                <a href="#!" style="color:black">Administración E.I.C</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Asesoría Financiera</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Estructuración</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Ingeniería financiera</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-center" style="color:black">Noticias</h5>

                        <ul class="list-unstyled text-center">

                            <li>
                                <a href="#!" style="color:black">Trimestral</a>
                            </li>
                            <li>
                                <a href="#!" style="color:black">Anual</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="color:black">0800-CAPITAL
                info@percapital.com
                <p>Caracas-Venezuela</p>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <a href=# class=scroll-to-top><i class="fa fa-angle-up" aria-hidden=true></i></a>

    </div>
</div>
</template>

<script>
export default {
    methods:{
        faq(){
            window.location = "/faq";
        }
    }
}
</script>

<style>
.list-group-footer .list-group-item {
    background-color: transparent;
    border-top-color: transparent;
    border-bottom: transparent;
    border-left-color: transparent;
    border-right-color: transparent;
    font-size: 78%;
}

.h4-mine {
    font-size: 80%;
}

.h5-mine {
    font-size: 80%;
    color: black;
}
</style>
