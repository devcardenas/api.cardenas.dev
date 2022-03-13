require('./bootstrap');

import { createApp } from 'vue'
import App from './App.vue';
import { createRouter, createWebHistory } from 'vue-router'
/*import VueAxios from 'vue-axios';
import axios from 'axios';*/

//Components
import About from './views/About.vue';
import Experience from './views/Experience.vue';
import Education from './views/Education.vue';
import Skills from './views/Skills.vue';
import Portfolio from './views/Portfolio.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: About,
    },
    {
        path: '/about',
        name: 'about',
        component: About,
    },
    {
        path: '/experience',
        name: 'experience',
        component: Experience,
    },
    {
        path: '/education',
        name: 'education',
        component: Education,
    },
    {
        path: '/skills',
        name: 'skills',
        component: Skills,
    },
    {
        path: '/portfolio',
        name: 'portfolio',
        component: Portfolio,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');