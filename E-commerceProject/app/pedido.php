<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class pedido extends Model
{
    public $table = "pedidos";
    public $guarded = [];

    public function productos(){

        return $this->belongsToMany(Producto::class,'pedidos-productos', 'pedido_id','producto_id');
    
    }

    public function usuario(){

        return $this->belongsTo(usuario::class,'user_id');

    }


}
