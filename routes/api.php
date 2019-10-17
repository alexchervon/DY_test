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

    Route::get('project/{id}', 'ProjectAPIController@show');
    Route::post('project/{id}/article', 'ProjectAPIController@storeArticle');
    Route::post('project/{id}/user', 'ProjectAPIController@storeUser');
    Route::post('article/{id}/attach', 'ArticleAPIController@storeFile');
    Route::post('user/{id}/attach', 'UserAPIController@storeFile');
});