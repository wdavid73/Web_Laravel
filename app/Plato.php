<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
protected $fillable = ['nombre' , 'valor'];
    public function ingredientes(){
        return $this->belongsToMany('App\Ingrediente');
    }
    protected $table = "platos";
}
