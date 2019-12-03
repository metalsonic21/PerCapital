<template>
<div>

    <div class="container" style="margin-top:-4%;">
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">
                    <div class="navy-line"></div>
                    <h1 class="title-mine section-title-per" align="center"> <strong>DISTRIBUCIÓN POR SECTOR</strong></h1>

                </div>
            </div>

            <div class="container">
                <div class="row align-items-start ">
                    <div class="col-lg-6 col-md-6 col-sm-5 ibox-content ibox-mine">
                        <canvas id="myChart"></canvas>
                        <img src="/img/content/landing/graph.png" class="thegraph">
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-6 ibox-content col-two ibox-mine">
                        <h5 class="text-center">¿Por qué un fondo mutual?</h5>
                        <ul>
                            <li>Acceso a beneficios de portafolio Premium
                                con baja inversión.</li>
                            <li>Ganancias exentas de ISLR</li>
                            <li>Analistas especializados dedicado a gestión
                                del portafolio.</li>
                            <li>Portafolio diversificado para mitigar riesgos.</li>
                            <li>Acceso a precios de economías de escala</li>
                        </ul>
                    </div>

                    <!--<div class="col-md-6">
                        <img src="/img/content/landing/graphdesc.png" alt="leyenda" class="mt-2" style="width:320px;height:270px;">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Color</th>
                                    <th scope="col">Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background-color:#4472c4"></td>
                                    <td>Estatal</td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ffc000"></td>
                                    <td>Financiero</td>
                                </tr>
                                <tr>
                                    <td style="background-color:#ed7d31"></td>
                                    <td>Industrial</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#5b9bd5"></td>
                                    <td>Inmobiliario</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#BABABA"></td>
                                    <td>Alimentos y bebidas</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#264478"></td>
                                    <td>Agropecuario</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#9e480e"></td>
                                    <td>Otros</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#70AD47"></td>
                                    <td>Varios</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#636363"></td>
                                    <td>Comercial</td>
                                </tr>
                            </tbody>
                        </table>
                        -->
                </div>
            </div>

        </div>

    </div>
</div>

</div>
</template>

<script>
import Chart from '../../../../public/js/Chart.min.js'
export default {
    mounted() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    //data: [10, 40, 30, 10, 10],
                    data: [0, 0, 0, 0, 0],
                    backgroundColor: ['#9e480e', '#ed7d31', '#BABABA', '#ffc000', '#5b9bd5'],
                }],
                labels: ['Mixtas 10%', 'Industrial 40%', 'Alimentos y bebidas 30%', 'Financiero 10%', 'Inmobiliario 10%'],

            },
            options: {
                responsive: true
            }
        });
    }
}
</script>

<style>
@media (min-width: 1200px) {
    .thegraph {
        margin-top: -200px;
    }

    .ibox-mine {
        height: 480px !important;
    }

    .desc-col {
        margin-left: -100px;
    }

    .col-two{
        margin-left: 15px;
    }
}

@media (min-width: 330px) and (max-width: 412px) {
    .thegraph {
        margin-top: -20px;
    }

    .ibox-mine {
        height: 450px !important;
    }
}

@media (min-width: 450px) and (max-width: 504px) {
    .thegraph {
        margin-top: -80px;
    }

    .ibox-mine {
        height: 450px !important;
    }
}

@media (min-width: 505px) and (max-width: 754px) {
    .thegraph {
        margin-top: -120px;
    }

    .ibox-mine {
        height: 450px !important;
    }
}

.ibox-title-mine {
    background-color: transparent !important;
    border-top: none !important;
}

.row:before, .row:after {display: none !important;}
</style>
