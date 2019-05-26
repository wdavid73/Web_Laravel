<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenPlato extends Model
{
    protected $fillable = ['plato_id' ,'orden_id' , 'cantidad' , ' valor'];
    protected $table = 'ingrediente_plato';
}
