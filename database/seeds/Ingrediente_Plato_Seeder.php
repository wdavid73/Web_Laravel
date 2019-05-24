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

        $ingredienteId = DB::table('ingredientes')->select('codigo')->first();
        $platoId = DB::table('platos')->select('codigo')->first();

        DB::table('ingrediente_plato')->insert([
            'ingrediente_codigo' => $ingredienteId->codigo,
            'plato_codigo' => $platoId->codigo,
            'cantidad' => '2',
        ]); // insertar datos de ejemplo
    
    }
}
