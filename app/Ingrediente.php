<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function platos (){
        return $this->belongsToMany('App\Plato');
    }
}
