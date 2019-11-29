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
                <div class="row align-items-start ibox-content">
                    <div class="col-md-6">
                        <img src="/img/content/landing/graph.png" alt="" class="graph-img" style="width:310px;height:310px;">
                    </div>
                    <div class="col-md-6">
                        <img src="/img/content/landing/graphdesc.png" alt="leyenda" class="mt-2" style="width:320px;height:270px;">
                        <!--
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

<!--

<script>
import Chart from '../../../../public/js/Chart.min.js'
export default {
    mounted() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [10, 40, 30, 10, 10],
                    backgroundColor: ['#9e480e', '#ed7d31', '#BABABA', '#ffc000', '#5b9bd5'],
                }],
            },
            options: {
                responsive: true
            }
        });
    }
}
</script>
-->

<style>
@media (min-width: 1200px) {
    .graph-img {
        margin-left: 230px;
    }

    .desc-col {
        margin-left: -100px;
    }
}

@media (max-width: 400px) {
    .graph-img {
        height: 310px !important;
    }
}

@media (min-width: 330px) and (max-width: 412px) {
    .graph-img {
        height: 280px !important;
    }
}

@media (min-width:458px) and (max-width: 744px) {
    .graph-img {
        margin-left: 40px;
    }
}

.ibox-mine {
    height: 480px;
}

.ibox-title-mine {
    background-color: transparent !important;
    border-top: none !important;
}
</style>
