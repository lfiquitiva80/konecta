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

Auth::routes();
/* CoreUI templates */

Route::middleware('auth')->group(function() {


	


	Route::view('/', 'panel.blank');

});
// Section Pages
Route::view('/sample/error404','errors.404')->name('error404');
Route::view('/sample/error500','errors.500')->name('error500');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('clientesall','clientesController@tablaindex');

Route::resource('clientes','clientesController');
Route::resource('perfil','perfilController');
Route::resource('usuario','usuarioController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
