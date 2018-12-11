<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;

class marcaController extends Controller
{
    public function list(){
        $marcas = Marca::all();
        $vac = compact("marcas");
        return view("marcas", $vac);
    }
}
