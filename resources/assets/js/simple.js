/**
 * simple
 * 簡單風格主題，引入bootstrap、markdown高亮js，及vue組件parse。
 * 注：html需要引入<div id="app"></div>標籤給vue初始使用。
 */

require('./bootstrap');

window.marked = require('marked');
window.hljs = require('./vendor/highlight.min.js');

Vue.component('parse', require('./components/Parse.vue'));

new Vue({
    el: '#app'
});