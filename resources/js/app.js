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

const app = new Vue({
    el: '#app',
});
