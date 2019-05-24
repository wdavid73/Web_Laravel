<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ingredientes')->insert([
            'nombre' => 'Pan',
            'proveedor' => 'Jose'
        ]); // insertar datos de ejemplo a la tabla

        DB::table('ingredientes')->insert([
            'nombre' => 'Tomates',
            'proveedor' => 'Pedro'
        ]);// insertar datos de ejemplo a la tabla

        DB::table('ingredientes')->insert([
            'nombre' => 'Salchichas',
            'proveedor' => 'Juan'
        ]);// insertar datos de ejemplo a la tabla

        DB::table('ingredientes')->insert([
            'nombre' => 'Queso',
            'proveedor' => 'Jose'
        ]);// insertar datos de ejemplo a la tabla

    }
}
