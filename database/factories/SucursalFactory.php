<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


use App\Sucursal;

$factory->define(Sucursal::class, function (Faker $faker) {
    return [
        'codigo'=> $faker->word,
        'descripcion'=> $faker->word,
        'direccion'=> $faker->word,
        'estado'=> $faker->word,

    ];
});