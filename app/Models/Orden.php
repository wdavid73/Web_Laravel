<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = ['fecha' , 'numMesa' , 'estado'];
    public function platos (){
        return $this->belongsToMany('App\Models\Plato')->withTimestamps();
    }
    protected $table = 'ordenes';
}
