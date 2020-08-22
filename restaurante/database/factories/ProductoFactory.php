<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\categoria;
use App\producto;
use Faker\Generator as Faker;

$factory->define(producto::class, function (Faker $faker) {
    return [
        'descripcion'=> $faker->text,
        'foto'=>'default.jpg',
        'nombre'=>$faker->name,
        'precio'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'idCategoria'=> factory(categoria::class)
    ];
});
