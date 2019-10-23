require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(BootstrapVue);
library.add(faUserSecret)

Vue.component('font-awesome-icon', FontAwesomeIcon)

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

/* Router */

import { routes } from './routes';
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
});