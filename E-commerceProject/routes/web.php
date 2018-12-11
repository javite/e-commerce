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
<<<<<<< HEAD
    return view('home');
});

// Route::get('/login', );

Route::get('/register', 'registercontroller@');

// Route::get("/agregarPelicula", "PeliculasController@agregar");
// Route::post("/agregarPelicula", "PeliculasController@almacenar");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
    return view('welcome');
});
>>>>>>> master
