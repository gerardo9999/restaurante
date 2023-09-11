<?php

namespace Database\Seeders;

use App\Models\DatoPersonal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatoPersonaSeeder extends Seeder
{

    public function run(): void
    {
        DatoPersonal::create([
            'nombres' => 'Gerardo Ramón',
            'apellidos' => 'Arias Justiniano',
            'ci' => '9799195',
            'telefono' => '62046139',
            'direccion' => 'C/ Santa Teresa #429',
            'fecha_nacimiento' => '1990-02-23',
        ]);
    }
}
