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

Route::get('/', function () {
    return view('home');
})->name('Home');



/*---------------- Ingredientes ----------------- */
//Ruta de Ingredientes
Route::get('/ingredientes/index', 'IngredientesController@index');
Route::get('/ingredientes', 'IngredientesController@principalView');

//registro de ingrediente
Route::get('/ingredientes/create' , 'IngredientesController@create')->name('CrearIngrediente');
Route::post('/ingredientes/registrar', 'IngredientesController@store');
//mostrar detalles del ingrediente
Route::get('/ingredientes/{ingredientes}' , 'IngredientesController@show')->where('ingredientes' ,'[0-9]+')->name("ingredientes.show");
//editar
Route::get('/ingredientes/{ingredientes}/edit' , 'IngredientesController@edit')->name("ingrediente.edit");
Route::put('/ingredientes/{ingredientes}' , 'IngredientesController@update');

/*---------------- Platos ----------------- */
//Ruta de Platos
Route::get('/platos/index', 'PlatosController@index');
Route::get('/platos', 'PlatosController@principalView');
//registro de plato
Route::get('/platos/create' , 'PlatosController@create')->name('CrearPlato');
Route::post('/platos/registrar', 'PlatosController@store');
//mostrar detalles del plato
Route::get('/platos/{platos}' , 'PlatosController@show')->where('platos' ,'[0-9]+')->name("platos.show");
//editar
Route::get('/platos/{platos}/edit' , 'PlatosController@edit')->name("platos.edit");
Route::put('/platos/{platos}' , 'PlatosController@update');



/*---------------- Ordenes ----------------- */
//controlador de ordenes
Route::get('/ordenes/index', 'OrdenesController@index');
Route::get('/ordenes', 'OrdenesController@principalView');
//registro de ordenes
Route::get('/ordenes/create' , 'OrdenesController@create')->name('CrearOrden');
Route::post('/ordenes/registrar', 'OrdenesController@store');
//mostrar detalles del plato
Route::get('/ordenes/{ordenes}' , 'OrdenesController@show')->where('ordenes' ,'[0-9]+')->name("ordenes.show");
//editar
Route::get('/ordenes/{ordenes}/edit' , 'OrdenesController@edit')->name("ordenes.edit");
Route::put('/ordenes/{ordenes}' , 'OrdenesController@update');


/* -------------- Relaciones Muchos a Muchos --------------- */
Route::get('/ingrediente_plato/index', function () {
    return view('/ingrediente_plato/index');
})->name('ingrediente_plato');

Route::get('/orden_plato/index', function () {
    return view('/orden_plato/index');
})->name('orden_plato');
