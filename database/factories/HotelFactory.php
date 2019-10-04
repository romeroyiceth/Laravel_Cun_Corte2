<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Hotel::class, function (Faker $faker) {
    return [
        'nit'=>$faker->numberBetween($min = 100, $max = 1000),
        'nombre'=>$faker->title,
    ];
});
