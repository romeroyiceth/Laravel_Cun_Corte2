<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
          $this->call(AutoSeeder::class);
          $this->call(ProgramadorSeeder::class);
          $this->call(CursoSeeder::class);
          $this->call(HotelSeeder::class);
          $this->call(CafeteriaSeeder::class);
          $this->call(RestauranteSeeder::class);
    }
}
