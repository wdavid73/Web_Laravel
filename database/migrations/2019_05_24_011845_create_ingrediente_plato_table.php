<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientePlatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingrediente_plato', function (Blueprint $table) {
            $table->increments('id');
            
            //llave foranea de ingrediente codigo
            $table->integer('ingrediente_codigo')->unsigned();
            $table->foreign('ingrediente_codigo')->reference('codigo')->on('ingredientes');

            //llave foranea de plato codigo
            $table->integer('plato_codigo')->unsigned();
            $table->foreign('plato_codigo')->reference('codigo')->on('platos');

            $table->dobule('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingrediente_plato');
    }
}
