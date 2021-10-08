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


Route::get('/', 'AdminController@add');
Route::get('/master', 'AdminController@master');
Route::get('/inquiry', 'AdminController@inquiry');


Route::get('/contact', 'ContactController@add');
Route::get('/test/contact', 'ContactController@test');
Route::get('/contact', 'ContactController@index');
Route::post('/test/content', 'ContactController@create');


Route::get('/profile', 'UserController@add');
Route::get('/test/profile', 'UserController@test');
Route::get('/profile', 'UserController@index');
Route::post('/test/profile', 'UserController@create');


Route::get('/view', 'ViewController@add');
Route::get('/test/view', 'ViewController@test');
Route::get('/view', 'ViewController@index');
Route::post('/test/view', 'ViewController@create');


Route::get('/article', 'ArticleController@add');
Route::get('/test/article', 'ArticleController@test');
Route::get('/article', 'ArticleController@index');
Route::post('/test/article', 'ArticleController@create');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

