require('./bootstrap');

window.marked = require('marked');
window.hljs = require('./vendor/highlight.min.js');

Vue.component('parse', require('./components/Parse.vue'));

new Vue({
    el: '#app'
});

