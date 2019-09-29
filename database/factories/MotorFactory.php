<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Motor::class, function (Faker $faker) {
    return [
        'modelo'=>$faker->title,
        'potencia'=>$faker->numberBetween($min = 100, $max = 1000),
        'rendimiento'=>$faker->numberBetween($min = 100, $max = 1000),
        'consumo'=>$faker->numberBetween($min = 100, $max = 1000),
        'auto_id'=> function(){
            return factory(App\Models\Auto::class)-> create()->id;
        }
    ];
});
