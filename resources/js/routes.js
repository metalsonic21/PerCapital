import Home from './views/Home.vue';
import Example from './components/ExampleComponent.vue';
export const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },    
    {
    path: '/example',
    component: Example,
    name: 'example'
}, ];