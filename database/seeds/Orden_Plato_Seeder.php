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

        $platoId = DB::table('platos')->select('id')->first();
        $numOrdenId = DB::table('ordenes')->select('id')->first();

        DB::table('orden_plato')->insert([
            'plato_id' => $platoId->id,
            'num_orden' => $numOrdenId->id,
            'cantidad' => '2',
            'valor' => '120000'
        ]);
        
    }
}
