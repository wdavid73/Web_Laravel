<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $fillable = ['nombre' , 'proveedor'];
    public function platos (){
        return $this->belongsToMany('App\Models\Plato')->withTimestamps();
    }
    protected $table = "ingredientes";
}
