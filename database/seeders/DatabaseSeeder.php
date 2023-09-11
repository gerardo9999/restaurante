<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DatoPersonal;
use App\Models\Permiso;
use App\Models\PermisoRol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            RolSeeder::class,
            PermisoSeeder::class,
            PermisoRolSeeder::class,
            DatoPersonaSeeder::class,
            EmpresaSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
