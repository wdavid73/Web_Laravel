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
            $table->unsignedInteger('ingrediente_codigo'); //parte 1
            $table->foreign('ingrediente_codigo')->references('codigo')->on('ingredientes'); //parte 2
            
            //llave foranea de plato codigo
            $table->unsignedInteger('plato_codigo'); //parte 1
            $table->foreign('plato_codigo')->references('codigo')->on('platos'); //parte 2

            $table->double('cantidad');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
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
