<?php

use Illuminate\Database\Seeder;

class Ingrediente_Plato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingrediente_plato')->truncate();


        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => '1',
            'plato_codigo' => '1',
            'cantidad' => '2',
        ]); // insertar datos de ejemplo 

        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => '1',
            'plato_codigo' => '2',
            'cantidad' => '1',
        ]); // insertar datos de ejemplo 

        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => '2',
            'plato_codigo' => '1',
            'cantidad' => '3',
        ]); // insertar datos de ejemplo 

        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => '1',
            'plato_codigo' => '3',
            'cantidad' => '2',
        ]); // insertar datos de ejemplo 

        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => '3',
            'plato_codigo' => '1',
            'cantidad' => '1',
        ]); // insertar datos de ejemplo 
    }
}
