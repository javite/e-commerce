<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\categoria;

class producto extends Model
{
    public $table = "productos";
    public $guarded = [];

    public function marcas(){

        return $this->belongsTo(Marca::class,'marca_id');
        
    }

    public function categorias(){

        return  $this->belongsTo(Categoria::class, 'categoria_id');

    }
    
    public function pedidos(){

        return $this->belongsToMany(Pedido::class,'pedidos-productos','producto_id', 'pedido_id');
    
    }


}
