<template>
<div>
    <div class="container">
        <h5 class="title-mine">Formula Objetivo de Ahorro</h5>
        <b-form>
            <b-form-group>
                <b-row>
                    <b-col cols="5">
                        <label>Capital final</label>
                        <b-form-input type="text" v-model="S" ></b-form-input>
                        <small>Tip: Los decimales deben ir con punto</small>
                    </b-col>

                    <b-col cols="4">
                        <label>Tasa de interés</label>
                        <b-form-input type="text" v-model="i" ></b-form-input>

                    </b-col>

                    <b-col cols="3">
                        <label>Periodicidad</label>
                        <b-form-input type="text" v-model="n" ></b-form-input>

                    </b-col>
                    
                </b-row>

            </b-form-group>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <b-button class="float-right" >No implementado aún</b-button>
                </div>
                <div class="p-2 bd-highlight">
                    <h6 class="mt-2" v-if="roi>0">R: {{roi*100}}%</h6>

                </div>
            </div>
        </b-form>
    </div>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>
