<template>
<div>
    <div class="container">
        <h5 class="title-mine">{{$t('so')}}</h5>
        <b-form>
            <b-form-group>
                <b-row>
                    <b-col cols="6">
                        <label>{{$t('so')}}</label>
                        <b-form-input type="text" id="my-input-3" v-model="s" ></b-form-input>
                    </b-col>

                    <b-col cols="6">
                        <label>{{$t('ia')}}</label>
                        <b-form-input type="text" id="my-input-4" v-model="i"></b-form-input>                  
                    </b-col>
                </b-row>
                <b-row>
                    <b-col cols="6">
                        <label>{{$t('p')}}</label>
                        <b-form-select v-model="p" :options="options" :state="validationp"></b-form-select>
                        <b-form-invalid-feedback :state="validationp">{{$t('validationP')}}</b-form-invalid-feedback>
                  
                    </b-col>
                    <b-col cols="6">
                        <label>{{$t('y')}}</label>
                        <b-form-input type="text" v-model="n" :state="validationn"></b-form-input>
                        <b-form-invalid-feedback :state="validationn">{{$t('validationY')}}</b-form-invalid-feedback>
                  
                    </b-col>
                </b-row>

            </b-form-group>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <b-button class="float-right" @click="calculationR(i,p,s,n)">{{$t('btncalculate')}}</b-button>
                </div>
                <div class="p-2 bd-highlight">
                    <h6 class="mt-2 calculator-result"><strong>{{$t('resultso')}} {{r}}</strong></h6>

                </div>
            </div>
        </b-form>
    </div>
</div>
</template>

<script>
import AutoNumeric from 'autonumeric';
export default {
    data() {
        return {
            s: 1,
            i: 1,
            n: 1,
            p: 12, //Yearly, Monthly, Every 3 months
            options: [
                {
                    value: 1,
                    text: 'Mensual'
                },
                {
                    value: 6,
                    text: 'Semestral'
                },
                {
                    value: 3,
                    text: 'Trimestral'
                },
                {
                    value: 12,
                    text: 'Anual',
                }
            ],
            r: 0,
        }
    },
    computed: {
        validationn() {
            if (this.n <= 0 || isNaN(this.n) || this.n == '' || !(this.n == parseInt(this.n, 10)))
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
            s = s.toString().replace(/\./g, '');
            s = s.toString().replace(",", ".");
            i = i.toString().replace(/\./g, '');
            i = i.toString().replace(",", ".");
            s = parseFloat(s);
            i = parseFloat(i);
            let num = s*((i/100)/p);
            let den = (1+((i/100)/p));
            den = Math.pow(den,n*p);
            den = den-1;
            this.r = num/den;
            this.r =Math.round(this.r*100)/100;
            this.r = this.r.toFixed(2);
            this.r = this.r.toString().replace('.', ',');
            this.r = this.r.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
            return this.r;
        }
    },
    mounted(){
        new AutoNumeric('#my-input-3', {
            decimalCharacter: ",",
            digitGroupSeparator: "."
        });

        new AutoNumeric('#my-input-4', {
            decimalCharacter: ",",
            digitGroupSeparator: "."
        });
    }
}
</script>

<style>

</style>
