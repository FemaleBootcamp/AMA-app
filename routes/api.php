<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

    /*
    | Get All Records
    */
Route::get('/records', 'API\RecordsController@getRecords');

  /*
  | Get A Record
  */
  Route::get('/records/{id}', 'API\RecordsController@getRecord');

  /*
  
  | Adds a New Record
  
  */
 // Route::post('/recoords', 'API\RecordsController@postNewRecord');
});