import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import FlagIcon from 'vue-flag-icon'
import {i18n} from './plugins/l18n'

Vue.config.productionTip = false

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(FlagIcon)

library.add(fas)


/* CSS */
//require('../public/css/styles.css')
require('../public/css/default.css')
require('../public/css/animate.css')
require('../public/css/percapital.css')
require('../public/css/swiper.min.css')
require('../public/css/swiper-slider.css')

Vue.component('font-awesome-icon', FontAwesomeIcon)
new Vue({
  router,
  store,
  i18n,
  render: h => h(App)
}).$mount('#app')
