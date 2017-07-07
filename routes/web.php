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
    return view('inicio');
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


<<<<<<< HEAD
// Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/eventos', 'AdminController@eventos')->name('admin.eventos');
Route::post('/admin/eventos', 'AdminController@postEventos');
=======
Auth::routes();
Route::get('/admin', 'Admin\DashboardController@index')->name('admin');

Route::get('/admin/eventos', 'Admin\EventoController@eventos')->name('admin.evento.list');
Route::get('/admin/eventos/add', 'Admin\EventoController@eventosadd')->name('admin.evento.add');

Route::get('/admin/comer', 'Admin\ComerController@comer')->name('admin.comer.list');
Route::get('/admin/comer/add', 'Admin\ComerController@comeradd')->name('admin.comer.add');

Route::get('/admin/dormir', 'Admin\DormirController@dormir')->name('admin.dormir.list');
Route::get('/admin/dormir/add', 'Admin\DormirController@dormiradd')->name('admin.dormir.add');
>>>>>>> origin/master
