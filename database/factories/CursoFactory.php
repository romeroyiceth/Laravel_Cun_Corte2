<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Curso::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->text($maxNbChars = 20),
        'fecha_inicio'=>$faker->date($format = 'Y-m-d', $max = '2019-05-28'),
        'fecha_final'=>$faker->date($format = 'Y-m-d', $max = '2020-05-28')
    ];
});
