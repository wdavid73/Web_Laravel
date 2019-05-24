<?php

use Illuminate\Database\Seeder;
use \App\Models\Orden;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* insertar datos de ejemplo a la tabla con el constructor de consultas
       DB::table('ordenes')->insert([
            'fecha' => '2003-12-31',
            'numMesa' => '1',
            'estado' => 'N'
        ]);
       */
      Orden::create([
            'fecha' => '2003-12-31',
            'numMesa' => '1',
            'estado' => 'N'
        ]);


        Orden::create([
            'fecha' => '2019-05-31',
            'numMesa' => '2',
            'estado' => 'N'
        ]);
        Orden::create([
            'fecha' => '2003-12-31',
            'numMesa' => '3',
            'estado' => 'C'
        ]);
        Orden::create([
            'fecha' => '2000-6-3',
            'numMesa' => '4',
            'estado' => 'N'
        ]);
        Orden::create([
            'fecha' => '2013-12-1',
            'numMesa' => '5',
            'estado' => 'N'
        ]);

        factory(Orden::class)->times(10)->create();
    }
}
