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
    return view('/auth/login');
});

Auth::routes();

Route::get('/homeadm', 'HomeController@index')->name('admin');
Route::get('/homeusu', 'HomeController@index')->name('usu');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/info', 'Datos\InfoController@index')->name('info');
    Route::get('/info/detalle', 'Datos\InfoController@show')->name('detalle');
    Route::get('/info/costoinsumos', 'Datos\CostoInsumosController@index')->name('costoinsumos');
    Route::get('/info/costolabores', 'Datos\CostoLaboresController@index')->name('costolabores');
    Route::get('/info/producciones', 'Datos\ProduccionController@index')->name('producciones');
    Route::get('/info/rendimientos', 'Datos\RendimientoController@index')->name('rendimientos');

    //Route::resource('users','Admin\UserController');
    Route::get('/index', 'Admin\UserController@index')->name('index');
    Route::get('/show', 'Admin\UserController@show')->name('show');
    Route::get('/edit', 'Admin\UserController@edit')->name('edit');
    Route::get('/create', 'Admin\UserController@create')->name('create');
    
    
    Route::get('/lote', 'Admin\LoteController@index')->name('lote');
});