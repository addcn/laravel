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

// 系統默認
Route::get('/w', function () {
    return view('welcome');
    //return redirect('article/index');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

// 當前時間
Route::get('now', function(){
    return date("Y-m-d H:i:s");
});


// 單頁面項目
Route::group(['prefix' => 'spa'], function () {
	Route::get('{path?}', 'IndexController@spa')->where('path', '[\/\w\.-]*');
});


// 首頁功能
Route::get('markdown', 'IndexController@markdown'); 
Route::get('contact', 'IndexController@contact');
Route::get('about', 'IndexController@about');


// 模板路由
Route::get('hellovue', function () {
    return view('hellovue'); // Vue使用
});


// 文章发布
Route::get('article/index', 'ArticleController@index');
Route::get('article/list', 'ArticleController@alist');
Route::get('article/detail/{id}', 'ArticleController@detail');

Route::get('article/create', 'ArticleController@create');
Route::post('article/create', 'ArticleController@store');
//Route::post('article/create', 'ArticleController@store')->middleware('auth');

Route::get('article/edit', 'ArticleController@edit');
Route::get('article/delete', 'ArticleController@delete');




// 默認首頁
Route::get('/', function () {
    return view('index');
});
