<?php

Route::group(['namespace' => 'users', 'middleware' => 'auth'], function() {

    /*
    ** PEDIDOS
    */

    Route::group(['namespace' => 'Pedidos'], function() {
        
    });

});