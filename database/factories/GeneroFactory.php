<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Genero::class, function (Faker $faker) {
    return [
        'tipopublico'=>$faker->text($maxNbChars = 10),
        'nombregenero'=>$faker->text($maxNbChars = 20),
    ];
});
