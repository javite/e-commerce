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

// Route::get('/', function () {
//     return view('home');
// });
//Route::post('logout', 'auth\LoginController@logOut');
//Route::get('home', 'HomeController@index')->name('home');

Route::get('/','productosController@list'); //trae todos los productos
Route::get('/home', 'productosController@list');
Route::get('categoria/{id}','categoriasController@buscarPorID'); // trae todas las categorias
Route::get('detalleProducto/{id}','productosController@detalle'); //trae un producto con ese ID
Route::get('login', 'auth\LoginController@showLogin');
Route::post('login', 'auth\LoginController@postLogin');
Route::get('pedidos/{id}', 'pedidosController@detalle');
Route::post('/pedidoAdd', 'pedidosController@add');

Route::get('home/searchredirect', function(){
/* si el argumento search está vacío regresar a la página anterior */
   if (empty(Input::get('search'))) return redirect()->back();
    $search = urlencode(e(Input::get('search')));
    $route = "home/search/$search";
    return redirect($route);
});
Route::get("home/search/{search}", 'buscadorController@buscarPorBuscador');


Auth::routes();
