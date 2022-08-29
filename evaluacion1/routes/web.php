<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\BuscadorController;
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


Route::get('/', 'App\Http\Controllers\CategoriasController@index');
Route::get('/', 'App\Http\Controllers\ProductosController@index');
Route::get('/', 'App\Http\Controllers\SucursalController@index');
Route::get('/', 'App\Http\Controllers\StocksController@index');
Route::get('/', 'App\Http\Controllers\BuscadorController@index');
Route::get('/imagenes/{filename}', 'App\Http\Controllers\ProductosController@getImagen');
Route::resource('categorias', 'App\Http\Controllers\CategoriasController');
Route::resource('productos', 'App\Http\Controllers\ProductosController');
Route::resource('sucursales', 'App\Http\Controllers\SucursalController');
Route::resource('stocks', 'App\Http\Controllers\StocksController');
Route::resource('buscador', 'App\Http\Controllers\BuscadorController');

Route::get('deleteProductos/{id}', 'App\Http\Controllers\ProductosController@delete');
Route::get('/updateProductos/{id}', 'App\Http\Controllers\ProductosController@update');
Route::post('/updateProductos', 'App\Http\Controllers\ProductosController@updateSave');