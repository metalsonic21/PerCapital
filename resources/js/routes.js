import Home from './views/Home.vue';
import Faq from './views/Faq.vue';
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
}, ];