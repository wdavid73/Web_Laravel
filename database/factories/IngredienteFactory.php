<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Ingrediente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2 , false),
        'proveedor' => $faker->name(),
    ];
});
