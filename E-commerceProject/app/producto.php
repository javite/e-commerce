<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = "productos";
    public $guarded = [];

    public function marcas(){

        return $this->belongsTo(Marcas::class,'marca_id');
        
    }

    public function categorias(){

        return  $this->belongsToMany(Categorias::class, 'productos-categorias','producto_id','categoria_id');

    }
    


}
