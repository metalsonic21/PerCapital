<template>
<div>
    <div class="container">
        <div class="navy-line-2" style="opacity:0"></div>
        <h1 class="title-mine section-title-per" align="center">{{$t('calculators')}}</h1>
        <h5 class="title-mine">{{$t('roi')}}</h5>
        <b-form>
            <b-form-group>
                <b-row>
                    <b-col cols="5">
                        <label>{{$t('ii')}}</label>
                        <b-form-input type="text" v-model="initial" class="my-input" id="my-input"></b-form-input>
                     </b-col>

                    <b-col cols="4">
                        <label>{{$t('vf')}}</label>
                        <b-form-input type="text" v-model="final" class="my-input-2" id="my-input-2"></b-form-input>
                    </b-col>

                    <b-col cols="3">
                        <label>{{$t('y')}}</label>
                        <b-form-input type="text" v-model="years" :state="validationY"></b-form-input>
                        <b-form-invalid-feedback :state="validationY">{{$t('validationY')}}</b-form-invalid-feedback>

                    </b-col>
                </b-row>

            </b-form-group>

            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">
                    <b-button class="float-right" @click="ROI(initial,final,years)">{{$t('btncalculate')}}</b-button>
                </div>
                <div class="p-2 bd-highlight">
                    <h6 class="mt-2 calculator-result" v-if="validationY">{{$t('result')}} {{roi}}% </h6>

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
            initial: 1,
            final: 1,
            years: 1,
            roi: 0,
        }
    },
    computed: {
        validationY() {
            if (isNaN(this.years) || this.years == '' || this.years <= 0 || !(this.years == parseInt(this.years, 10)))
                return false;
            else return true;
        }
    },
    methods: {
        ROI(initial, final, years) {
            initial = initial.toString().replace(/\./g, '');
            initial = initial.toString().replace(",", ".");
            final = final.toString().replace(/\./g, '');
            final = final.toString().replace(",", ".");
            initial = parseFloat(initial);
            final = parseFloat(final);
            let pot = 1 / years;
            let base = final / initial;
            this.roi = Math.pow(base, pot);
            this.roi = this.roi - 1;
            this.roi = Math.round(this.roi * 10000) / 10000;
            this.roi = this.roi*100;
            this.roi = this.roi.toFixed(2);
            this.roi = this.roi.toString().replace('.', ',');
            return this.roi;
        }
    },
    mounted() {
        new AutoNumeric('#my-input', {
            decimalCharacter: ",",
            digitGroupSeparator: "."
        });

        new AutoNumeric('#my-input-2', {
            decimalCharacter: ",",
            digitGroupSeparator: "."
        });
    }
}
</script>

<style>

</style>
