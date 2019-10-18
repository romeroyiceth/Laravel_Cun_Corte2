<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Contrato::class, function (Faker $faker) {
    return [
        'fechainicio'=>$faker->date($format = 'Y-m-d', $max = '2011-05-28'),
        'fechacierre'=>$faker->date($format = 'Y-m-d', $max = '2019-05-28'),
        'condiciones'=>$faker->text($maxNbChars = 20),
    ];
});
