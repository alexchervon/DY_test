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

//API version 1
Route::group(['prefix' => 'v1'], function () {

    //Auth required routes
    Route::group(['middleware' => 'auth.jwt'], function () {


    });

});