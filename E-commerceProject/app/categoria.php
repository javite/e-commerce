<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $table = "categorias";
    public $guarded = [];

    public function productos(){

        return  $this->belongsToMany(Productos::class, 'productos-categorias','categoria_id','producto_id');

    }
}
