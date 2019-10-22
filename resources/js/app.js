require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
Vue.config.productionTip = false

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});
