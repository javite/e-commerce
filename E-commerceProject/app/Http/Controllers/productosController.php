<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class productosController extends Controller
{
    public function list(){
        $productos = Producto::all();
        $vac = compact("productos");
        return view("productos", $vac);
    }

}
