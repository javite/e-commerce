<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

        return $this->hasMany(producto::class,'producto_id');
    
    }


}
