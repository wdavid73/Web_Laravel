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
            $table->integer('ingrediente_codigo')
                            ->unsigned()
                            ->foreign('ingrediente_codigo')
                            ->references('codigo')
                            ->on('ingredientes');
                            

            //llave foranea de plato codigo
            $table->integer('plato_codigo')
                            ->unsigned()
                            ->foreign('plato_codigo')
                            ->references('codigo')
                            ->on('platos');

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
