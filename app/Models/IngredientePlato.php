<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientePlato extends Model
{
    protected $fillable = ['ingrediente_id' ,'plato_id' , 'cantidad'];
    protected $table = 'ingrediente_plato';
}
