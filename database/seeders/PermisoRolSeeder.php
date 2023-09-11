<?php

namespace Database\Seeders;

use App\Models\Permiso;
use App\Models\PermisoRol;
use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = Permiso::get('id');

        foreach ($permisos as $value) {
            PermisoRol::create([
                'permiso_id' => $value->id,
                'rol_id' => Rol::ADMINISTRADOR,
                'status' => true
            ]);
        }
        foreach ($permisos as $value) {
            PermisoRol::create([
                'permiso_id' => $value->id,
                'rol_id' => Rol::INVITADO,
                'status' => false
            ]);
        }
    }
}
