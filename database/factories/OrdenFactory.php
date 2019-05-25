<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Orden::class, function (Faker $faker) {
    return [
        'fecha' => $faker->date(),
        'numMesa' => $faker->numberBetween(0 , 20),
        'estado' => $faker->randomElement(['C' , 'N'])
    ];
});
