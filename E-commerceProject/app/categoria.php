<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $table = "categorias";
    public $guarded = [];

    public function productos(){

        return  $this->hasMany(Producto::class, 'producto_id');

    }
}
