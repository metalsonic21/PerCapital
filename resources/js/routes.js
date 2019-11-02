import Home from './views/Home.vue';
import Faq from './views/Faq.vue';
import Login from './views/Login.vue';
import Register from './views/Register.vue';
import Dashboard from './views/Dashboard.vue';
import Services from './views/Services.vue'
import Example from './components/ExampleComponent.vue';
export const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },    
    {
        path: '/faq',
        component: Faq,
        name: 'Faq'
    },
    {
        path: '/login',
        component: Login,
        name: 'Login',
        meta:{
            auth: false
        }
    }, 
    {
        path: '/register',
        component: Register,
        name: 'Register',
        meta: {
            auth:false
        }
    },
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'Dashboard',
        meta: {
            auth: true
        }
    },
    {
        path: '/services',
        component: Services,
        name: 'Services'
    }
];