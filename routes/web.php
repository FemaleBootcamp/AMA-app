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

Route::get('/ama', 'AmaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/ama-list/', 'Admin\AmaController@index')->middleware('auth');

Route::get('/create', 'Admin\AmaController@create')->middleware('auth');
Route::post('/create', 'Admin\AmaController@save');


