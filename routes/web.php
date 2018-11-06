<?php

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/homeadm', 'HomeController@index')->name('admin');
Route::get('/homeusu', 'HomeController@index')->name('usu');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users','Admin\UserController');
    
    Route::resource('fincascultivosusers','Admin\FincaCultivoUserController');
    Route::resource('fincas','Admin\FincaController');
    Route::get('fincas/municipios/{id}', 'Admin\FincaController@getMunicipios');
    Route::resource('cultivos','Admin\CultivoController');
    Route::resource('cultivosfincas','Admin\FincaCultivoController');
    Route::resource('fincasusers','Admin\FincaUserController');

    Route::resource('variedades','Admin\VariedadController');
    
    Route::resource('lotes','Admin\LoteController');
    
    Route::resource('estados','Admin\EstadoFisicoController');
    
    Route::resource('propiedades','Admin\PropiedadSueloLoteController');
    Route::resource('propiedad','Admin\PropiedadController');
    Route::resource('propiedadlote','Admin\PropiedadLoteController');
    
    Route::resource('producciones','Admin\ProduccionController');

    Route::resource('insumos','Admin\InsumoController');

    Route::resource('labores','Admin\LaborController');

    Route::get('/info', 'User\InfoController@index')->name('info');
    Route::get('/info/detalles/{id}/anio/{anio}','User\InfoController@show')->name('detalles');
    Route::get('/info/costoinsumos', 'User\CostoInsumosController@index')->name('costoinsumos');
    Route::get('/info/costolabores', 'User\CostoLaboresController@index')->name('costolabores');
    Route::get('/info/producciones', 'User\ProduccionController@index')->name('producciones');
    Route::get('/info/rendimientos', 'User\RendimientoController@index')->name('rendimientos');
});


