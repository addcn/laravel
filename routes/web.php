<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


// 當前時間
Route::get('now', function(){
    return date("Y-m-d H:i:s");
});

// Vue使用
Route::get('hellovue', function () {
    return view('hellovue');
});

// 單頁面項目
Route::group(['prefix' => 'spa'], function () {
	Route::get('{path?}', 'HomeController@spa')->where('path', '[\/\w\.-]*');
});

// vue組件顯示markdown
Route::get('markdown', 'ArticleController@markdown');

// 文章发布系统
Route::get('article/index', 'ArticleController@index');
Route::get('article/list', 'ArticleController@alist');
Route::get('article/detail/{id}', 'ArticleController@detail');

Route::get('article/create', 'ArticleController@create');
Route::post('article/create', 'ArticleController@store');
//Route::post('article/create', 'ArticleController@store')->middleware('auth');

Route::get('article/edit', 'ArticleController@edit');
Route::get('article/delete', 'ArticleController@delete');

Route::get('article/contact', function () {
    return view('contact');
});

Route::get('article/about', function () {
    return view('about');
});


// 默認首頁
Route::get('b', function () {
    //return redirect('article/index');
});
