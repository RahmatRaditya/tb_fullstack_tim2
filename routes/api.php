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
});

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('getBarang', 'BarangController@getBarang');
    Route::post('createBarang', 'BarangController@createBarang');
    Route::post('updateBarang', 'BarangController@updateBarang');
    Route::get('getOutlet', 'OutletController@getOutlet');
});

Route::post('login', 'AuthController@login');
Route::post('users', 'UserController@store');
Route::get('users', 'UserController@index');