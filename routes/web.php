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
    return view('home');
})->name('Home');

//Ruta de Ingredientes
Route::get('/ingredientes/index', 'IngredientesController@index');
Route::get('/ingredientes', 'IngredientesController@principalView');

//registro de ingrediente
Route::get('/ingredientes/create' , 'IngredientesController@create')->name('CrearIngrediente');
Route::post('/ingredientes/registrar', 'IngredientesController@store');


//Ruta de Platos
Route::get('/platos/index', 'PlatosController@index');
Route::get('/platos', 'PlatosController@principalView');
//registro de plato
Route::get('/platos/create' , 'PlatosController@create')->name('CrearPlato');
Route::post('/platos/registrar', 'PlatosController@store');


//controlador de ordenes
Route::get('/ordenes/index', 'OrdenesController@index');
Route::get('/ordenes', 'OrdenesController@principalView');
//registro de ordenes
Route::get('/ordenes/create' , 'OrdenesController@create')->name('CrearOrden');
Route::post('/ordenes/registrar', 'OrdenesController@store');



Route::get('/ingrediente_plato/index', function () {
    return view('/ingrediente_plato/index');
})->name('ingrediente_plato');

Route::get('/orden_plato/index', function () {
    return view('/orden_plato/index');
})->name('orden_plato');
