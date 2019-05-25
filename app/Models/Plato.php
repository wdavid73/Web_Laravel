<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
protected $fillable = ['nombre' , 'valor'];
    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class , 'ingrediente_plato')->withTimestamps();
    }

    public function ordenes(){
        return $this->belongsToMany(Orden::class ,'orden_plato')->withTimestamps();
    }

    
    protected $table = "platos";
}
