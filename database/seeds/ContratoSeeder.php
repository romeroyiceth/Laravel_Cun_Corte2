<?php

use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contrato=factory(App\Models\Contrato::class,3)
        ->create()
        ->each(function($contrato){
            $contrato->empleado()->save(factory(App\Models\Empleado::class)->make());  
        });
    }
}
