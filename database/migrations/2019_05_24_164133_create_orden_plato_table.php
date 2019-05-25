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

            $table->unsignedInteger('plato_id');
            $table->foreign('plato_id')->references('id')->on('platos');
            
            $table->unsignedInteger('orden_id');
          //FIXME:
            $table->foreign('orden_id')->references('id')->on('ordenes');
            
            $table->integer('cantidad')->default('1');
            $table->integer('valor')->default('20000');

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
