<template>
<div>
    <div class="container">
        <h5 class="title-mine">Formula Objetivo de Ahorro</h5>
        <b-form>
            <b-form-group>
                <b-row>
                    <b-col cols="6">
                        <label>Capital final</label>
                        <b-form-input type="text" v-model="s" :state="validation"></b-form-input>
                        <small>Tip: Los decimales deben ir con punto</small>
                        <b-form-invalid-feedback :state="validation">El dato ingresado debe ser numérico mayor a cero</b-form-invalid-feedback>
                  
                    </b-col>

                    <b-col cols="6">
                        <label>Tasa de interés (%)</label>
                        <b-form-input type="text" v-model="i" :state="validationI"></b-form-input>
                        <b-form-invalid-feedback :state="validationI">El dato ingresado debe ser numérico positivo</b-form-invalid-feedback>
                  

                    </b-col>
                </b-row>
                <b-row>
                    <b-col cols="6">
                        <label>Periodicidad</label>
                        <b-form-select v-model="p" :options="options" :state="validationp"></b-form-select>
                        <b-form-invalid-feedback :state="validationp">Seleccione periodicidad</b-form-invalid-feedback>
                  
                    </b-col>
                    <b-col cols="6">
                        <label>Años</label>
                        <b-form-input type="text" v-model="n" :state="validationn"></b-form-input>
                        <b-form-invalid-feedback :state="validationn">El dato ingresado debe ser numérico mayor a cero</b-form-invalid-feedback>
                  
                    </b-col>
                </b-row>

            </b-form-group>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <b-button class="float-right" @click="calculationR(i,p,s,n)">Calcular</b-button>
                </div>
                <div class="p-2 bd-highlight">
                    <h6 class="mt-2">R: {{r}}</h6>

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
            s: 1,
            i: 1,
            n: 1,
            p: 12, //Yearly, Monthly, Every 3 months
            options: [
                {
                    value: 12,
                    text: 'Mensual'
                },
                {
                    value: 4,
                    text: 'Trimestral'
                },
                {
                    value: 1,
                    text: 'Anual',
                }
            ],
            r: 0,
        }
    },
    computed: {
        validation() {
            if (this.s < 0 || isNaN(this.s) || this.s == '')
                return false;
            else return true;
        },
        validationI() {
            if (this.i < 0 || isNaN(this.i) || this.i == '')
                return false;
            else return true;
        },
        validationn() {
            if (this.n <= 0 || isNaN(this.n) || this.n == '')
                return false;
            else return true;
        },
        validationp(){
            if (this.p==null)
            return false;
        else return true;
        }
    },
    methods: {
        calculationR(i,p,s,n){
            let num = s*((i/100)/p);
            let den = (1+((i/100)/p));
            den = Math.pow(den,n*p);
            den = den-1;
            this.r = num/den;
            this.r =Math.round(this.r*100)/100;
            return this.r;
        }
    }
}
</script>

<style>

</style>
