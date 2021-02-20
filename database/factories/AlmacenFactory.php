<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


use App\Almacen;

$factory->define(Almacen::class, function (Faker $faker) {
    return [
        'codigo'=> $faker->word,
        'descripcion'=> $faker->word,
        
        'id_sucursal'=> $faker->word,
    ];
});
