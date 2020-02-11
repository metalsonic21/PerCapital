import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/calculators',
    name: 'Calculators',
    component: () => import(/* webpackChunkName: "about" */ '../views/Calculators.vue')
  },
  {
    path: '/calendar',
    name: 'Calendar',
    component: () => import(/* webpackChunkName: "about" */ '../views/Calendar.vue')
  },
  {
    path: '/mutual',
    name: 'Mutual',
    component: () => import(/* webpackChunkName: "about" */ '../views/Mutual.vue')
  },
  {
    path: '/services',
    name: 'Services',
    component: () => import(/* webpackChunkName: "about" */ '../views/Services.vue')
  },
  {
    path: '/strategies',
    name: 'Strategies',
    component: () => import(/* webpackChunkName: "about" */ '../views/Strategies.vue')
  },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router
