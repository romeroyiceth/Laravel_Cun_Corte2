<?php

use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autors=factory(App\Models\Autor::class,3)
        ->create()
        ->each(function($autors){
            $autors->comics()->save(factory(App\Models\Comic::class)->make());  
        });
    }
}
