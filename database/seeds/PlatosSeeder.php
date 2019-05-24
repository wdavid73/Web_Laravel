<?php

use Illuminate\Database\Seeder;
use \App\Models\Plato;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* insertar datos de ejemplo a la tabla con el constructor de consultas
        DB::table('platos')->insert([
            'nombre' => 'Perro Caliente',
            'valor' => '1500'
        ]); // inserta datos de prueba
        */
        
        // insertar datos de ejemplo a la tabla con Eloquen ORM
        Plato::create([
            'nombre' => 'Salchipapa',
            'valor' => '7000'
        ]); // inserta datos de prueba

        Plato::create([
            'nombre' => 'Hamburgesa',
            'valor' => '1500'
        ]); // inserta datos de prueba

        Plato::create([
            'nombre' => 'Pollo Asado',
            'valor' => '5000'
        ]); // inserta datos de prueba

        factory(Plato::class)->times(15)->create();
    }
}
