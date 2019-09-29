<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Programa::class, function (Faker $faker) {
    return [
        'registro'=>$faker->numberBetween($min = 100, $max = 9000),
        'nombre'=>$faker->company,
        'clase_id'=> function(){
            return factory(App\Models\Clase::class)-> create()->id;
        }
    ];
});
