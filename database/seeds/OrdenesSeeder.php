<?php

use Illuminate\Database\Seeder;

class OrdenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('ordenes')->truncate(); // vaciar la tabla

        DB::table('ordenes')->insert([
            'fecha' => '2003-12-31',
            'numMesa' => '1',
            'estado' => 'N'
        ]);
        DB::table('ordenes')->insert([
            'fecha' => '2019-05-31',
            'numMesa' => '2',
            'estado' => 'N'
        ]);
        DB::table('ordenes')->insert([
            'fecha' => '2003-12-31',
            'numMesa' => '3',
            'estado' => 'C'
        ]);
        DB::table('ordenes')->insert([
            'fecha' => '2000-6-3',
            'numMesa' => '4',
            'estado' => 'N'
        ]);
        DB::table('ordenes')->insert([
            'fecha' => '2013-12-1',
            'numMesa' => '5',
            'estado' => 'N'
        ]);
    }
}
