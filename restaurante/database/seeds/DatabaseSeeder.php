<?php

use App\categoria;
use App\mesa;
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
        factory(categoria::class,20);
        factory(mesa::class,30);
        // $this->call(UserSeeder::class);
    }
}
