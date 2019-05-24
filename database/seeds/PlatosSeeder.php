<?php

use Illuminate\Database\Seeder;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('platos')->truncate();//vaciar tabla

        DB::table('platos')->insert([
            'nombre' => 'Perro Caliente',
            'valor' => '1500'
        ]); // inserta datos de prueba

        
        DB::table('platos')->insert([
            'nombre' => 'Salchipapa',
            'valor' => '7000'
        ]); // inserta datos de prueba
        
        DB::table('platos')->insert([
            'nombre' => 'Hamburgesa',
            'valor' => '1500'
        ]); // inserta datos de prueba
        
        DB::table('platos')->insert([
            'nombre' => 'Pollo Asado',
            'valor' => '5000'
        ]); // inserta datos de prueba
    }
}
