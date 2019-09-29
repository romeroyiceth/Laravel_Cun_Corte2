<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Proyecto::class, function (Faker $faker) {
    return [

        'nombre'=>$faker->title,
        'fecha_inicio'=>$faker->date($format = 'Y-m-d', $max = '2011-05-28'),
        'fecha_entrega'=>$faker->date($format = 'Y-m-d', $max = '2019-05-28'),
        'empresa'=>$faker->company,
        'programador_id'=> function(){
            return factory(App\Models\Programador::class)-> create()->id;
        }

    ];
});
