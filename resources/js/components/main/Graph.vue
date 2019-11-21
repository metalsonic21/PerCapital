<template>
<div>

    <div class="container">
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox ibox-mine">
                        <div class="ibox-title">
                            <h5 class="title-mine" align="center"> <strong>Distribución por sector</strong></h5>
                        </div>
                        <div class="ibox-content ibox-mine">
                            <img src="/img/content/landing/graph.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5 class="title-mine" align="center"> <strong>Leyenda</strong></h5>

                        </div>
                        <div class="ibox-content ibox-mine">
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
    mounted() {

    }
}
</script>

<style>
    .ibox-mine{
        height:480px;
    }
</style>