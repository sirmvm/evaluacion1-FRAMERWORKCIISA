<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\StocksController;
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
Route::get('/', 'App\Http\Controllers\SucursalesController@index');
Route::get('/', 'App\Http\Controllers\StocksController@index');
Route::resource('categorias', 'App\Http\Controllers\CategoriasController');
Route::resource('productos', 'App\Http\Controllers\ProductosController');
Route::resource('sucursales', 'App\Http\Controllers\SucursalesController');
Route::resource('stock', 'App\Http\Controllers\StocksController');