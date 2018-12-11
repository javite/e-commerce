<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;

class categoriasController extends Controller
{
    public function list(){
        $categorias = Categoria::all();
        $vac = compact("categorias");
        return view("categorias", $vac);
    }
}
