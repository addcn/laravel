/**
 * spa
 * vue单页面项目开发，路由見routes.js，狀態管理使用store.js，http加載使用'vue-router。
 * 注：html需要引入<div id="app"></div>標籤給vue初始使用。
 */

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