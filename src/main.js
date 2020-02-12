import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import FlagIcon from 'vue-flag-icon'
import {i18n} from './plugins/l18n'
import VS2 from 'vue-script2'

Vue.config.productionTip = false
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

Vue.use(FlagIcon)

library.add(fas)
Vue.use(VS2)


/* CSS */
require('../public/css/default.css')
require('../public/css/animate.css')
require('../public/css/percapital.css')
require('../public/css/Chart.min.css')

Vue.component('font-awesome-icon', FontAwesomeIcon)
new Vue({
  router,
  store,
  i18n,
  render: h => h(App)
}).$mount('#app')
