require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
window.Vue = require('vue');
Vue.config.productionTip = false

/* Main page coponents */
Vue.component('disclaimer', require('./components/main/Disclaimer.vue').default);
Vue.component('slider', require('./components/main/Slider.vue').default);
Vue.component('landing', require('./components/main/Landing.vue').default);
Vue.component('footeralt', require('./components/main/Footer.vue').default);
Vue.component('Values', require('./components/main/Values.vue').default);
Vue.component('Contact', require('./components/main/Contact.vue').default);
Vue.component('Numbers', require('./components/main/Numbers.vue').default);
Vue.component('Logos', require('./components/main/Logos.vue').default);
Vue.component('Graph', require('./components/main/Graph.vue').default);

/* Faq components */
Vue.component('Questions', require('./components/faq/Questions.vue').default);


/* Views */
Vue.component('Home', require('./views/Home.vue').default);
Vue.component('Faq', require('./views/Faq.vue').default);
Vue.component('Services', require('./views/Services.vue').default);
Vue.component('Team', require('./views/Team.vue').default);
Vue.component('Mutual', require('./views/Mutual.vue').default);
Vue.component('About', require('./views/About.vue').default);
Vue.component('FI', require('./views/FI.vue').default);
Vue.component('RiskCapital', require('./views/RiskCapital.vue').default);
Vue.component('Corporate', require('./views/Corporate.vue').default);
Vue.component('Calculator', require('./views/Calculator.vue').default);
Vue.component('Strats', require('./views/Strats.vue').default);
Vue.component('Calendar', require('./views/Calendar.vue').default);

/* Calculators */

Vue.component('Roi', require('./components/calculators/ROI.vue').default);
Vue.component('saving-objective', require('./components/calculators/SavingObjective.vue').default);



/* ENGLISH */

//Views
Vue.component('MutualEn', require('./en/views/Mutual.vue').default);
Vue.component('ServicesEn', require('./en/views/Services.vue').default);
Vue.component('AboutEn', require('./en/views/About.vue').default);
Vue.component('HomeEn', require('./en/views/Home.vue').default);
Vue.component('CalculatorEn', require('./en/views/Calculators.vue').default);
Vue.component('StratsEn', require('./en/views/Strategies.vue').default);

//Components
//Mutual
Vue.component('GraphEn', require('./en/components/mutual/Graph.vue').default);

//About
Vue.component('TeamEn', require('./en/components/about/Team.vue').default);
Vue.component('CorporateEn', require('./en/components/about/Corporate.vue').default);
Vue.component('FaqEn', require('./en/components/about/Faq.vue').default);

//Main
Vue.component('SliderEn', require('./en/components/main/Slider.vue').default);
Vue.component('CardsEn', require('./en/components/main/Cards.vue').default);
Vue.component('NumbersEn', require('./en/components/main/Numbers.vue').default);
Vue.component('ContactEn', require('./en/components/main/Contact.vue').default);
Vue.component('FooterEn', require('./en/components/main/Footer.vue').default);

//Calculators
Vue.component('RoiEn', require('./en/components/calculators/ROI.vue').default);
Vue.component('SavingEn', require('./en/components/calculators/SavingObjective.vue').default);


const app = new Vue({
    el: '#app',
});
