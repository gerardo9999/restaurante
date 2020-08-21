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
        factory(categoria::class,20)->create();
        factory(mesa::class,30)->create();
        // $this->call(UserSeeder::class);
    }
}
