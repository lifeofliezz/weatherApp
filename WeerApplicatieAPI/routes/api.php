<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//userroutes
Route::get('users/{id}', 'ApiController@getUser');
Route::put('users/{id}', 'ApiController@updateUser');

//arduinodataroutes
Route::get('arduino_data', 'ApiController@getAllArduinoData');
Route::post('arduino_data', 'ApiController@createArduinoData');

