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

        $ingredienteId = DB::table('ingredientes')->select('id')->first();
        $platoId = DB::table('platos')->select('id')->first();
        $ingrediente_platoId = DB::table('ingrediente_plato')->select('id')->first();

        DB::table('ingrediente_plato')->insert([
            'ingrediente_id' => $ingredienteId->id,
            'plato_id' => $platoId->id,
            'cantidad' => '2',
        ]); // insertar datos de ejemplo
    
    }
}
