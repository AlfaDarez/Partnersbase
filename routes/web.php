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
    return "OK";
});




Route::get('/Main',[
'as'=>'main',
'uses'=> 'menu@index'
]);

Route::get('/Menu-Partners',[
	'as'=>'menu-partners',
	'uses'=>'menu@partners'
]);

Route::get('/Menu-Administrador',[
	'as'=>'menu-admin',
	'uses'=>'menu@admin'
]);


Route::get('/Menu-Biblioteca',[
	'as'=>'menu-biblioteca',
	'uses'=>'menu@biblioteca'
]);

Route::get('/Menu-Tienda',[
	'as'=>'menu-tienda',
	'uses'=>'menu@tienda'
]);



Route::get('/estadisticas',[
 'as'=>'estadisticas',
 'uses'=>'estadistica@index'

]);

Route::get('/Reportes',[
 'as'=> 'reportes',
 'uses'=>'menu@reportes'
]);

Route::get('/Configuracion',[
'as'=>'menu_configuracion',
'uses'=> 'menu@configuracion'
]);

/// Menu De Usuarios
Route::get('/menu-usuarios',[
	'as'=>'user-menu',
	'uses'=>'menu@usermenu'
]);

Route::get('/Bussines-Center',[
	'as'=>'negocios',
	'uses'=>'menu@usernegocios'
]);

Route::get('/clientes-partner',[
	'as'=>'clientes-partner',
	'uses'=>'menu@userclientes'
]);

Route::get('/menu-compras',[
	'as'=>'menu-compras',
	'uses'=>'menu@usercompras'
]);

Route::get('/Library',[
  'as'=>'library',
  'uses'=>'menu@library'
]);

Route::get('/Configuration',[
	'as'=>'confipartner',
	'uses'=>'menu@confipartners'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
