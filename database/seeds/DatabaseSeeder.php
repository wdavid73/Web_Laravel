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
        $this->truncateTables([
            'ingredientes',
            'platos',
            'ordenes',
            'users'
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(PlatosSeeder::class);
        $this->call(OrdenesSeeder::class);

        $this->call(Ingrediente_Plato_Seeder::class);
        $this->call(Orden_Plato_Seeder::class);

        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate(); // vaciar la tabla
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
