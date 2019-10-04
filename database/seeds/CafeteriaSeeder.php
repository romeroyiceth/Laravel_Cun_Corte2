<?php

use Illuminate\Database\Seeder;

class CafeteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cafeteria=factory(App\Models\Cafeteria::class,5)->create();

    }
}
