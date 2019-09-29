<?php

use Illuminate\Database\Seeder;

class ProgramadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programador=factory(App\Models\Programador::class,3)
        ->create()
        ->each(function($programador){
            $programador->proyectos()->save(factory(App\Models\Proyecto::class)->make());  
        });
    }
}
