<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Comic::class, function (Faker $faker) {
    return [
        'nombrecomic'=>$faker->text($maxNbChars = 20),
        'fechapublicacion'=>$faker->date($format = 'Y-m-d', $max = '2011-05-28'),
        'fechafinalizacion'=>$faker->date($format = 'Y-m-d', $max = '2019-05-28'),
        'autor_id'=> function(){
            return factory(App\Models\Autor::class)-> create()->id;
        }
    ];
});
