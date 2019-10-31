require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import { routes } from "./routes.js"

Vue.use(BootstrapVue);


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.config.productionTip = false

window.Vue = require('vue');


/* Main page coponents */
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation', require('./components/main/Navigation.vue').default);
Vue.component('disclaimer', require('./components/main/Disclaimer.vue').default);
Vue.component('slider', require('./components/main/Slider.vue').default);
Vue.component('landing', require('./components/main/Landing.vue').default);
Vue.component('footeralt', require('./components/main/Footer.vue').default);
Vue.component('Values', require('./components/main/Values.vue').default);


/* Faq components */
Vue.component('Questions', require('./components/faq/Questions.vue').default);


/* Views */
Vue.component('app', require('./views/App.vue').default);
Vue.component('Home', require('./views/Home.vue').default);
Vue.component('Faq', require('./views/Faq.vue').default);


/* Router */
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});