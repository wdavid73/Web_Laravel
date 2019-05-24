<?php

use Illuminate\Database\Seeder;

class Orden_Plato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orden_plato')->truncate();

        $platoId = DB::table('platos')->select('codigo')->first();
        $numOrdenId = DB::table('ordenes')->select('numero')->first();

        DB::table('orden_plato')->insert([
            'plato_codigo' => $platoId->codigo,
            'num_orden' => $numOrdenId->numero,
            'cantidad' => '2',
            'valor' => '120000'
        ]);
        
    }
}
