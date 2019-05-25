<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    
    protected $fillable = ['nombre' , 'proveedor'];
    public function platos (){
        return $this->belongsToMany(Plato::class , 'ingrediente_plato')->withTimestamps();
    }
    protected $table = "ingredientes";
    
}
