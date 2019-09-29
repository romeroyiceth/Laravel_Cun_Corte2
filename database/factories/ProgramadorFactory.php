<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Programador::class, function (Faker $faker) {
    return [
        'identificacion'=>$faker->numberBetween($min = 100, $max = 1000),
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastname,
        'correo'=>$faker->unique()->companyEmail,
        'cargo'=>$faker->randomElement($array = array ('programador ','Programador master')) ,
    ];
});
