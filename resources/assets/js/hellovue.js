/**
 * Hello Vue
 * laravel配置vue官方路由簡單示例
 */

require('./bootstrap');

import Vue from 'vue/dist/vue.js'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }
const Home = { template: '<div>Home</div>' }

const routes = [
  { path: '/foo', component: Foo },
  { path: '/bar', component: Bar },
  { path: '', component: Home }
]

const router = new VueRouter({
  routes
})

const app = new Vue({
  router
}).$mount('#app')