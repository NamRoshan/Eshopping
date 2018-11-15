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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ProductController@index')->name('view');
Route::get('/admin','AdminController@index')->name('admin');
Route::prefix('admin')->group(function(){
	 Route::get('login','Auth\AdminLoginController@showLoginForm');
	 Route::post('login','Auth\AdminLoginController@login')->name('login-admin');
	 Route::post('logout','Auth\AdminLoginController@logout')->name('logout-admin');
});