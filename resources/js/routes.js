import Vue from 'vue'

import VueRouter from 'vue-router'

//components to create routes
import LoginComponent from './components/LoginComponent'

import RegisterComponent from './components/RegisterComponent'

import DashboardComponent from './components/DashboardComponent'

import Home from './components/Home'

Vue.use(VueRouter);

export const routes = [
    {
        path: '/',
        component:Home,
    },
    {
        path: '/login',
        component:LoginComponent,
    },
    {
        path: '/register',
        component:RegisterComponent,
    },
    {
        path: '/dashboard',
        component:DashboardComponent,
    },
    
];