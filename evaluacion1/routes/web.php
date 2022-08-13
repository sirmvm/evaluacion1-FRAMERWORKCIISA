<?php

use Illuminate\Support\Facades\Route;

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

///////////oute::get('/', function () {
///////////   return view('plantilla');
///////////);
///////////
///////////oute::post('/productoAgregar','App\Http\Controllers\ProductsController@guardar')->name('GuardarProducto'); 
//Route::post('/','App\Http\Controllers\ProductsController@eliminar');
//Route::post('/','App\Http\Controllers\ProductsController@editar');


Route::get('/', 'App\Http\Controllers\StocksController@index');
Route::resource('stocks', 'App\Http\Controllers\StocksController');