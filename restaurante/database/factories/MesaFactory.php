<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mesa;
use Faker\Generator as Faker;

$factory->define(mesa::class, function (Faker $faker) {
    return [
        'capacidad'=> $faker->randomDigit,
        'descripcion'=>$faker->text,
        'ocupacion' =>$faker->sentence(2),
        'ubicacion' => $faker->sentence(1)
    ];
});
