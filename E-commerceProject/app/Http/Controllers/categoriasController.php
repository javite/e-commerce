<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\producto;

class categoriasController extends Controller
{
    public function buscarPorID($id){
        $productos = Producto::where("categoria_id","=", "$id")->get(); 
        $vac = compact("productos");
        
        $categorias = Categoria::all();
        $vac2 = compact("categorias");
        
        return view("home", $vac,$vac2 );
    }
}
