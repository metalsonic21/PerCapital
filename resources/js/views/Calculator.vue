<template>
<div class="animated fadeInRight">
    <div class="container">
        <div class="navy-line-2"></div>
        <h1 class="title-mine section-title-per" align="center">CALCULADORAS</h1>
        <h5 class="title-mine">Rentabilidad de inversión</h5>
        <b-form>
            <b-form-group>
                <b-row>
                    <b-col cols="4">
                        <label>Inversión inicial</label>
                        <b-form-input type="text" v-model="initial" :state="validation"></b-form-input>
                        <small>Tip: Los decimales deben ir con punto</small>
                        <b-form-invalid-feedback :state="validation">El dato ingresado debe ser numérico mayor a cero</b-form-invalid-feedback>
                    </b-col>

                    <b-col cols="4">
                        <label>Valor final</label>
                        <b-form-input type="text" v-model="final" :state="validationF"></b-form-input>
                        <b-form-invalid-feedback :state="validationF">El dato ingresado debe ser numérico</b-form-invalid-feedback>

                    </b-col>

                    <b-col cols="4">
                        <label>Años</label>
                        <b-form-input type="text" v-model="years" :state="validationY"></b-form-input>
                        <b-form-invalid-feedback :state="validationY">El dato ingresado debe ser numérico, entero, mayor a cero</b-form-invalid-feedback>

                    </b-col>
                </b-row>

            </b-form-group>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <b-button class="float-right" @click="ROI(initial,final,years)">Calcular</b-button>
                </div>
                <div class="p-2 bd-highlight">
                    <h6 class="mt-2" v-if="roi>0">Resultado: {{roi}}</h6>

                </div>
            </div>
        </b-form>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            initial: 1,
            final: 1,
            years: 1,
            roi: 0,
        }
    },
    computed: {
        validation: function () {
            if (isNaN(this.initial) || this.initial == '' || this.initial <= 0)
                return false;
            else return true;
        },
        validationF() {
            if (isNaN(this.final) || this.final == '' || this.final < 0)
                return false;
            else return true;
        },
        validationY() {
            if (isNaN(this.years) || this.years == '' || this.years <= 0 || !(this.years == parseInt(this.years, 10)))
                return false;
            else return true;
        }
    },
    methods: {
        ROI(initial, final, years) {
            let roival = 0;
            let pot = 1 / years;
            let base = final / initial;
            this.roi = Math.pow(base, pot) + 1;
            return this.roi;
        }
    }
}
</script>

<style>

</style>
