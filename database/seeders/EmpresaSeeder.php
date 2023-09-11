<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'razon_social' => 'Casa de Montero',
            'logotipo' => '',
            'encargado' => 'Yanine Arias Justiniano',
            'direccion' => 'C/Urbanizacion norte',
            'email' => 'monterocasa@gmail.com',
            'telefono' => '70012012',
            'nit' => '998991122',
        ]);
    }
}
