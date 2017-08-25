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

require __DIR__.'/admin/admin.route.php';
require __DIR__.'/users/users.route.php';
require __DIR__.'/pagina/pagina.route.php';

Route::get('/', function () {
    return view('welcome');
});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');