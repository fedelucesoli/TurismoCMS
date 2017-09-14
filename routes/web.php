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
    return view('paginas/inicio');
});
Route::get('/ciudad', function () { return view('paginas/ciudad'); });
Route::get('/donde/comer', function () { return view('paginas/donde-comer'); });

Route::get('/donde/dormir', function () { return view('paginas/donde-dormir'); });
Route::get('/eventos', function () { return view('paginas/eventos'); });
Route::get('/contacto', function () { return view('paginas/contacto'); });
Route::get('/turismo/activo', function () { return view('paginas/turismo-activo'); });
Route::get('/turismo/laguna', function () { return view('paginas/turismo-laguna'); });
Route::get('/turismo/religioso', function () { return view('paginas/turismo-religioso'); });
Route::get('/turismo/reuniones', function () { return view('paginas/turismo-reuniones'); });
Route::get('/turismo/rural', function () { return view('paginas/turismo-rural'); });


Auth::routes();
Route::get('/admin', 'Admin\DashboardController@index')->name('admin');

Route::post('/admin/comer/estado', 'Admin\ComerController@estado');
Route::post('/admin/dormir/estado', 'Admin\DormirController@estado');
Route::post('/admin/eventos/estado', 'Admin\EventoController@estado');
Route::post('/admin/lugar/estado', 'Admin\LugarController@estado');

Route::resource('admin/comer', 'Admin\ComerController', ['as' => 'admin']);
Route::resource('admin/eventos', 'Admin\EventoController', ['as' => 'admin']);
Route::resource('admin/dormir', 'Admin\DormirController', ['as' => 'admin']);
Route::resource('admin/lugar', 'Admin\LugarController', ['as' => 'admin']);

Route::resource('/admin/categorias', 'Admin\CategoriaController', ['as' => 'admin']);
