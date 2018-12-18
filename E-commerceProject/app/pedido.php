<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class pedido extends Model
{
    public $table = "pedidos";
    public $guarded = [];

    public function producto(){

        return $this->belongsTo(producto::class,'producto_id');
    
    }

    public function usuario(){

        return $this->belongsTo(usuario::class,'usuario_id');

    }

}
