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

Route::get('fincas', 'Api\v1\FincaController@index');
Route::get('fincas/{finca}', 'Api\v1\FincaController@show');
Route::post('fincas', 'Api\v1\FincaController@store');
Route::put('fincas/{finca}', 'Api\v1\FincaController@update');
Route::delete('fincas/{finca}', 'Api\v1\FincaController@delete');

Route::get('reservas', 'Api\v1\ReservaController@index');
Route::get('reservas/{reserva}', 'Api\v1\ReservaController@show');
Route::post('reservas', 'Api\v1\ReservaController@store');
Route::put('reservas/{reserva}', 'Api\v1\ReservaController@update');
Route::delete('reservas/{reserva}', 'Api\v1\ReservaController@delete');

Route::get('precios', 'Api\v1\PrecioController@index');
Route::get('precios/{precio}', 'Api\v1\PrecioController@show');
Route::post('precios', 'Api\v1\PrecioController@store');
Route::put('precios/{precio}', 'Api\v1\PrecioController@update');
Route::delete('precios/{precio}', 'Api\v1\PrecioController@delete');




