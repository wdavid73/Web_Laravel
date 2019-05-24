<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    public function ingredientes(){
        return $this->belongsToMany('App\Ingrediente');
    }
}
