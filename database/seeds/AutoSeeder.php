<?php

use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autos=factory(App\Models\Auto::class,3)
        ->create()
        ->each(function($autos){
            $autos->motor()->save(factory(App\Models\Motor::class)->make());  
        });
    }
}
