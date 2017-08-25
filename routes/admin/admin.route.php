<?php

Route::group(['namespace' => 'Admin'], function() {

    /*
    ** HOME
    */

    Route::group(['namespace' => 'Home'], function() {
        Route::get('inicio','IndexController@index');
    });

    /* 
    ** CATEGORIAS
    */

    Route::group(['namespace' => 'Categorias'], function() {
        Route::get('categorias','IndexController@index')->name('categorias');
        Route::get('listado-categorias','ListadoController@listado');
        Route::post('registrar','RegistrarController@index')->name('registrar.categoria');
        Route::get('eliminar-categoria/{id}','EliminarController@index');
        Route::get('editar-categoria/{id}','EditarController@index');
        Route::post('actualizar-categoria','ActualizarController@actualizar')->name('actualizar.categoria');
    });

    /*
    ** MARCAS
    */

    Route::group(['namespace' => 'Marcas'], function() {
        Route::get('marcas','IndexController@index');
        Route::get('listado-marcas','ListadoController@index');
        Route::post('registrar','RegistrarController@index')->name('registrar.marca');
        Route::get('eliminar-marca/{id}','EliminarController@index');
        Route::get('editar-marca/{id}','EditarController@index');
        Route::post('actualizar-marca','ActualizarController@index')->name('actualizar.marca');
    });

    /*
    ** PROMOCION
    */

    Route::group(['namespace' => 'Promociones'], function() {
        Route::get('promociones','IndexController@index');        
    });

    /*
    ** PRODUCTOS
    */

    Route::group(['namespace' => 'Productos'], function() {
        Route::get('productos','IndexController@index');
    });

    /*
    ** USUARIOS
    */

    Route::group(['namespace' => 'Usuarios'], function() {
        Route::get('usuarios','IndexController@index');        
        Route::get('listado-usuarios','ListadoController@listado');
        Route::post('registrar-usuario','RegistrarController@index')->name('registrar.usuario');
        Route::get('eliminar-usuario/{id}','EliminarController@index');
        Route::get('editar-usuario/{id}','EditarController@index');
        Route::post('actualizar-usuario','ActualizarController@index')->name('actualizar.usuario');
    });

});