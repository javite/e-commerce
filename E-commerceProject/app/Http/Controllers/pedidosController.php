<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedido;
use App\categoria;
use App\producto;
use auth;

class pedidosController extends Controller
{
   
    public function cart(){
        
        $pedidos = Pedido::where("estado", "=", "0")->where("usuario_id","=",Auth::user()->id)->get(); // hace un select * from tabla del modelo.
        $vac = compact("pedidos");
        $total = 0;
        foreach ($pedidos as $pedido) {
            $total += $pedido->producto->precio * $pedido->cantidad;
        }
        $categorias = Categoria::all();
        $vac2 = compact("categorias");
        return view("pedidos")->with($vac)->with($vac2)->with(compact("total"));

    }

    public function add(Request $req){
        if (!Auth::check()) {
            return redirect("/login");
        }
        $pedido = new Pedido();
        $pedido->producto_id = $req["id"];
        $pedido->usuario_id = Auth::user()->id;
        $pedido->cantidad = $req["quantity"];
        $pedido->save();
        return redirect("/cart");
  
    }
    
    public function buy(Request $req){
        if (!Auth::check()) {
            return redirect("/login");
        }
        $pedidos = Pedido::where("estado", "=", "0")->where("usuario_id","=",Auth::user()->id)->get();
        foreach($pedidos as $pedido){
            $pedido->estado = 1;
            $pedido->save();
        }

        return redirect("/home");
  
    }
}

