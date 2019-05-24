<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * especifiar que queremos que haga la migracion
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->char('email' , 100)->unique();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * 
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
