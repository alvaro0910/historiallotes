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

Auth::routes(
    
);

Route::get('/homeadm', 'HomeController@index')->name('admin');
Route::get('/homeusu', 'HomeController@index')->name('usu');



Route::group(['middleware' => 'auth'], function() {
    Route::get('/info', 'Datos\InfoController@index')->name('info');
    Route::get('/costolabores', 'Datos\CostoLaboresController@index')->name('costolabores');
    Route::get('/costoinsumos', 'Datos\CostoInsumosController@index')->name('costoinsumos');
    Route::get('/producciones', 'Datos\ProduccionController@index')->name('producciones');
    Route::get('/rendimientos', 'Datos\RendimientoController@index')->name('rendimientos');
});