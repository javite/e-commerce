<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\categoria;

class productosController extends Controller
{
    public function list(){
        $productos = Producto::all();
        $vac = compact("productos");
        
        $categorias = Categoria::all();
        $vac2 = compact("categorias");
         return view("home", $vac, $vac2);
    }

    public function detalle($id) {
        $producto = Producto::findOrFail($id);
        $vac = compact("producto");
        $categorias = Categoria::all();
        $vac2 = compact("categorias");
        return view("detalleProducto", $vac,$vac2 );
      }


}
