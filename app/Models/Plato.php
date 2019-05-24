<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
protected $fillable = ['nombre' , 'valor'];
    public function ingredientes(){
        return $this->belongsToMany('App\Models\Ingrediente')->withTimestamps();
    }

    public function ordenes(){
        return $this->belongsToMany('App\Modelos\Orden')->withTimestamps();
    }

    
    protected $table = "platos";
}
