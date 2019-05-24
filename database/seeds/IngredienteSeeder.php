<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*// insertar datos de ejemplo a la tabla con el constructor de consultas
        DB::table('ingredientes')->insert([
            'nombre' => 'Pan',
            'proveedor' => 'Jose'
        ]);*/ 
        /*
        Ingrediente::create([
            'nombre' => 'Pan',
            'proveedor' => 'Jose'
        ]);
        Ingrediente::create([
            'nombre' => 'Tomates',
            'proveedor' => 'Pedro'
        ]);// insertar datos de ejemplo a la tabla con Eloquen ORM

        Ingrediente::create([
            'nombre' => 'Salchichas',
            'proveedor' => 'Juan'
        ]);// insertar datos de ejemplo a la tabla con Eloquen ORM

        Ingrediente::create([
            'nombre' => 'Queso',
            'proveedor' => 'Jose'
        ]);// insertar datos de ejemplo a la tabla con Eloquen ORM

*/
        factory(Ingrediente::class)->times(20)->create();
    }
}
