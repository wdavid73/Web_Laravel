<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(PlatosSeeder::class);
        $this->call(OrdenesSeeder::class);

        $this->call(Ingrediente_Plato_Seeder::class);
    }
}
