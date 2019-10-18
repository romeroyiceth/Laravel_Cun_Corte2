<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Empleado::class, function (Faker $faker) {
    return [
        'identificacion'=>$faker->numberBetween($min = 1000, $max = 9000),
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastname,
        'contrato_id'=> function(){
            return factory(App\Models\Contrato::class)-> create()->id;
        }
    ];
});
