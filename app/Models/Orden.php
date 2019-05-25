<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = ['fecha' , 'numMesa' , 'estado'];
    public function platos (){
        return $this->belongsToMany(Plato::class , 'orden_plato')->withTimestamps();
    }
    protected $table = 'ordenes';
}
