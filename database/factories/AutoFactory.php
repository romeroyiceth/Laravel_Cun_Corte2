<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Auto::class, function (Faker $faker) {
    return [
        'modelo'=>$faker->title,
        'marca'=>$faker->numberBetween($min = 100, $max = 1000),
        'color'=>$faker->safeColorName,
        'numero_puertas'=>$faker->numberBetween($min = 2, $max = 4),
        'peso'=>$faker->numberBetween($min = 100, $max = 1000),
      
    ];
});
