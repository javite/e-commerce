<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;
use App\Comments;

class buscadorController extends Controller
{
    //
    // public function buscarPorBuscador($request){
    //   if($_GET != trim('')){
    //     $busquedas = Producto::where('nombre','like', '%' .$_GET. '%')->get();
    //     $vac = compact("busquedas");
    //
    //     return view('buscador', $vac);
    //   }
    //   else return view('home');
    //     // return view("buscador")->with($vac);
    // }

    public function buscarPorBuscador($search){
      $search = urldecode($search);
      $busqueda = Producto::select()
              ->where('nombre', 'LIKE', '%'.$search.'%')
              ->orderBy('id', 'desc')
              ->get();

      if (count($busqueda) == 0){
          return View('home.search')
          ->with('message', 'No hay resultados que mostrar')
          ->with('search', $search);
      } else{
          return View('home.search')
          ->with('comments', $busqueda)
          ->with('search', $search);
      }
  }
}
