<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $table = "productos";
    public $guarded = [];

    public function marcas(){
        return $this->hasMany(Marcas::class,'marca_id');
    }

}
