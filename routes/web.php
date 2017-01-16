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



Route::get('now', function(){
    return date("Y-m-d H:i:s");
});

// vue
Route::get('/vue', function () {
    return view('vue');
});

Route::group(['prefix' => 'dashboard'], function () {
   Route::get('{path?}', 'HomeController@dashboard')->where('path', '[\/\w\.-]*');
});


// article
Route::get('article', 'ArticleController@test');


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
