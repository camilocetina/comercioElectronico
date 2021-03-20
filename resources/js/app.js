
require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import { routes } from './routes'
import { store } from './store'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('login-component', require('./components/LoginComponent.vue').default);

import App from './components/App.vue';

const router = new VueRouter({
    routes,
    mode:'history',
})


const app = new Vue({
    el: '#app',
    router:router,
    store:store,
    render: app => app(App),
});


