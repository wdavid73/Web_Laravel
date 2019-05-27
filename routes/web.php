<?php
use App\Http\Controllers\IngredientesController;

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
/*--------------- LOGIN --------------- */
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');

Route::post('login' ,'Auth\LoginController@login')->name("login");
Route::post('logout' ,'Auth\LoginController@logout')->name("logout");

/* -------  Home ----------- */
Route::get('/home', 'HomeController@index')->name('home');



/*---------------- Ingredientes ----------------- */
//Ruta de Ingredientes
Route::get('/home/index', 'IngredientesController@index')->name('ingredientes.index');
Route::get('/ingredientes', 'IngredientesController@principalView')->name('ingredientes');

//registro de ingrediente
Route::get('/ingredientes/create' , 'IngredientesController@create')->name('ingrediente.create');
Route::post('/ingredientes/registrar', 'IngredientesController@store');
//mostrar detalles del ingrediente
Route::get('/ingredientes/{ingredientes}' , 'IngredientesController@show')->where('ingredientes' ,'[0-9]+')->name("ingredientes.show");
//editar
Route::get('/ingredientes/{ingredientes}/edit' , 'IngredientesController@edit')->name("ingrediente.edit");
Route::put('/ingredientes/{ingredientes}' , 'IngredientesController@update')->name('ingredientes.update');

/*---------------- Platos ----------------- */
//Ruta de Platos
Route::get('/platos/index', 'PlatosController@index')->name('platos.index');
Route::get('/platos', 'PlatosController@principalView')->name('platos');
//registro de plato
Route::get('/platos/create' , 'PlatosController@create')->name('CrearPlato');
Route::post('/platos/registrar', 'PlatosController@store');
//mostrar detalles del plato
Route::get('/platos/{platos}' , 'PlatosController@show')->where('platos' ,'[0-9]+')->name("platos.show");
//editar
Route::get('/platos/{platos}/edit' , 'PlatosController@edit')->name("platos.edit");
Route::put('/platos/{platos}' , 'PlatosController@update')->name('platos.update');



/*---------------- Ordenes ----------------- */
//controlador de ordenes
Route::get('/ordenes/index', 'OrdenesController@index')->name('orden.index');
Route::get('/ordenes', 'OrdenesController@principalView')->name('orden');
//registro de ordenes
Route::get('/ordenes/create' , 'OrdenesController@create')->name('create.orden');
Route::post('/ordenes/registrar', 'OrdenesController@store');
//mostrar detalles del plato
Route::get('/ordenes/{ordenes}' , 'OrdenesController@show')->where('ordenes' ,'[0-9]+')->name("ordenes.show");
//editar
Route::get('/ordenes/{ordenes}/edit' , 'OrdenesController@edit')->name("ordenes.edit");
Route::put('/ordenes/{ordenes}' , 'OrdenesController@update')->name('ordenes.update');
//Listado de Ordenes del DIA
Route::get('ordenes.list' , 'OrdenesController@list')->name('ordenes.list');
/* ---- Cierre de Orden ---- */
 Route::get('/ordenes/buscarMesa' , 'OrdenesController@buscarMesa')->name('ordenes.buscarMesa');
 Route::get('/ordenes/info' , 'OrdenesController@info')->name('ordenes.info');
 /*
Route::get('/ordenes/cierre/{ordenes}' , 'OrdenesController@informacion')->where('ordenes' ,'[0-9]+')->name("ordenes.informacion");
Route::post('/ordenes/cierreOrden', 'OrdenesController@cierreOrden')->name('ordenes.cierreOrden'); */


/* -------------- Relaciones Muchos a Muchos --------------- */

/* ------------- Relacion Ingrediente - Plato --------------------*/
Route::get('/ingrediente_plato/index' , 'IngredientePlatoController@index')->name('ingrediente_plato.index');
Route::get('/ingrediente_plato', 'IngredientePlatoController@principalView');
/*Registrar relacion en la base de datos*/
Route::get('/ingrediente_plato/create' , 'IngredientePlatoController@create')->name('ingrediente_plato.create');
Route::post('/ingrediente_plato/registrar', 'IngredientePlatoController@store');

/* ------------- Relacion Orden - Plato --------------------*/ 
Route::get('/orden_plato/index' , 'OrdenPlatoController@index')->name('orden_plato.index');
Route::get('/orden_plato', 'OrdenPlatoController@principalView');
/*Registrar relacion en la base de datos*/
Route::get('/orden_plato/create' , 'OrdenPlatoController@create')->name('orden_plato.create');
Route::post('/orden_plato/registrar', 'OrdenPlatoController@store');


