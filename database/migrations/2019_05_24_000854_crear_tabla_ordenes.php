<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOrdenes extends Migration
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
                $table->bigIncrements('numero');
                $table->date('fecha');
                $table->integer('numMesa');
                $table->char('estado' ,1);
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
