<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Clase::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->text($maxNbChars = 20),
        'aula'=>$faker->text($maxNbChars = 10),
        'estado'=>$faker->numberBetween($min = 0, $max = 1),
        'curso_id'=> function(){
            return factory(App\Models\Curso::class)-> create()->id;
        }
    ];
});
