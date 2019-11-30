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
                <div class="row align-items-start ibox-content ibox-mine">
                    <canvas id="myChart"></canvas>
                    
                    <div class="col-md-6">
                        <img src="/img/content/landing/graph.png" alt="" class="graph-img" style="width:440px;height:340px;">
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
                    labels: ['Mixtas', 'Industrial', 'Alimentos y bebidas', 'Financiero', 'Inmobiliario'],

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
    .graph-img {
        margin-left: 300px;
        margin-top: -640px;
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
        height: 240px !important;
        margin-top:-70px !important;
    }
}

@media (min-width:458px) and (max-width: 744px) {
    .graph-img {
        margin-top: -170px !important;
    }
}

@media screen and (min-width: 745px) and (max-width:1199px){
    .graph-img{
        margin-top: -280px !important;
        margin-left: 160px !important;
        height: 240px !important; 
    }
}

.ibox-mine {
    height: 450px;
}

.ibox-title-mine {
    background-color: transparent !important;
    border-top: none !important;
}
</style>
