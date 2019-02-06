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
Route::get('ama/{id}', 'AmaController@show');
Route::get('/announcement', 'AnnouncementController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('amas', 'Admin\AmaController')->middleware('auth');
Route::resource('/admin/ama_announcements', 'Admin\AmaAnnouncementsController')->middleware('auth');

Auth::routes();