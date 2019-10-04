<?php

use Illuminate\Database\Seeder;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurante=factory(App\Models\Restaurante::class,5)->create();

    }
}
