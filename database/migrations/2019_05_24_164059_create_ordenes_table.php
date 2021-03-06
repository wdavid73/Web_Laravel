<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('ordenes')){
            Schema::create('ordenes' , function (Blueprint $table){
                //Campos Basicos
                $table->increments('id');//Numero de orden
                $table->date('fecha');
                $table->integer('numMesa');
                $table->char('estado' ,1)->default('N');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes');
    }
}
