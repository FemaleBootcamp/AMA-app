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
/*

Route::get('/admin/ama-list', function () {
    return view('ama_list');
});
*/

Auth::routes();

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin/ama-list/', 'AmaController@index')->middleware('auth');
Route::get('/admin/ama-list/{tags}', 'AmaController@index')->middleware('auth');

