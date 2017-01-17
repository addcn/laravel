const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss').webpack('app.js');
	
	//Hello Vue
	mix.webpack('hellovue.js');

	//vue单页面项目开发
	mix.sass('spa.scss').webpack('spa.js');

	//簡單風格主題
	mix.sass('simple.scss').webpack('simple.js');

});
