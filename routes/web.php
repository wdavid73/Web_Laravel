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
Route::get('/ingredientes/index' , 'IngredientesController@index');
Route::get('/ingredientes' , 'IngredientesController@store');

//Ruta de Platos
Route::get('/platos/index' , 'PlatosController@index');
Route::get('/platos' , 'PlatosController@store');

//controlador de ordenes
Route::get('/ordenes/index' , 'OrdenesController@index');
Route::get('/ordenes' , 'OrdenesController@store');