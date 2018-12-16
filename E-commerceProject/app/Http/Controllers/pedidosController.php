<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedido;
use App\categoria;
use App\producto;
use auth;

class pedidosController extends Controller
{
   
    public function detalle($id){

        $pedido = Pedido::findOrFail($id); // hace un select * from tabla del modelo.
        $vac = compact("pedido");
        $categorias = Categoria::all();
        $vac2 = compact("categorias");
        return view("pedidos", $vac, $vac2);

    }

    public function add(Request $req){
        $pedido = new Pedido();
        // $pedido->producto->id = $req["id"];
        $pedido->id = 1;
        $pedido->usuario_id = Auth::user()->id;
        $pedido->save();

        return redirect("/home");
  
    }
}

