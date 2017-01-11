
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';
import store from './vuex/store.js';

import routes from './routes.js';

import App from './App.vue';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    linkActiveClass: 'active',
    routes: routes
});


new Vue(Vue.util.extend({ router, store }, App)).$mount('#app');
