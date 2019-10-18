<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos=factory(App\Models\Genero::class,3)
        ->create()
        ->each(function($generos){
            $generos->peliculas()->save(factory(App\Models\Pelicula::class)->make());  
        });
    }
}
