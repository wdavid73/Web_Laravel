<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Plato::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2 , false),
        'valor' => $faker->numberBetween(1000 , 100000)
    ];
});
