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

Route::get('/','productosController@list'); //trae todos los productos
Route::get('/home', 'productosController@list');
Route::post('/home', 'productosController@list');
Route::get('categoria/{id}','categoriasController@buscarPorID'); // trae todas las categorias
Route::get('detalleProducto/{id}','productosController@detalle'); //trae un producto con ese ID
Route::get('login', 'auth\LoginController@showLogin');
Route::post('login', 'auth\LoginController@postLogin');
Route::get('/cart', 'pedidosController@detalle');
Route::post('/pedidoAdd', 'pedidosController@add');
Route::get("/search", 'productosController@buscar');

Auth::routes();
