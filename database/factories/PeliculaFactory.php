<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Pelicula::class, function (Faker $faker) {
    return [
        'nombrepelicula'=>$faker->text($maxNbChars = 20),
        'fechaestreno'=>$faker->date($format = 'Y-m-d', $max = '2011-05-28'),
        'genero_id'=> function(){
            return factory(App\Models\Genero::class)-> create()->id;
        }
    ];
});
