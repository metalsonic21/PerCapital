require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
window.Vue = require('vue');
Vue.config.productionTip = false

/* Main page coponents */
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('disclaimer', require('./components/main/Disclaimer.vue').default);
Vue.component('slider', require('./components/main/Slider.vue').default);
Vue.component('landing', require('./components/main/Landing.vue').default);
Vue.component('footeralt', require('./components/main/Footer.vue').default);
Vue.component('Values', require('./components/main/Values.vue').default);


/* Faq components */
Vue.component('Questions', require('./components/faq/Questions.vue').default);


/* Views */
Vue.component('Home', require('./views/Home.vue').default);
Vue.component('Faq', require('./views/Faq.vue').default);
Vue.component('Services', require('./views/Services.vue').default);


const app = new Vue({
    el: '#app',
});
