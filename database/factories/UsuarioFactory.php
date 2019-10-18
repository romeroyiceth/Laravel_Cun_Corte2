<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
     
        'nombre'=>$faker->name,
      
    ];
});
