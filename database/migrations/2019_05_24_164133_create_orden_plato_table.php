<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenPlatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_plato', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('plato_codigo');
            $table->foreign('plato_codigo')->references('codigo')->on('platos');
            
            $table->unsignedInteger('num_orden');
          //FIXME:
            $table->foreign('num_orden')->references('numero')->on('ordenes');
            
            $table->integer('cantidad');
            $table->integer('valor');

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
        Schema::dropIfExists('orden_plato');
    }
}
