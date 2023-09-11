<?php

namespace Database\Seeders;

use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permiso_dashboard = [
            [
                'name' => 'dashboard-show',
                'description' => 'acceso al dashboard estadistico',
            ],
        ];

        foreach ($permiso_dashboard as $value) {
            Permiso::create($value);
        }

        // permisos de usuario
        $permiso_user = [
            [
                'name' => 'user-show',
                'description' => 'acceso a la lista de usuarios',
            ],
            [
                'name' => 'user-add',
                'description' => 'acceso a la adición de usuario',
            ],
            [
                'name' => 'user-update',
                'description' => 'acceso a la actualización de usuario',
            ],
            [
                'name' => 'user-delete',
                'description' => 'acceso a la eliminación de usuario',
            ]
        ];

        foreach ($permiso_user as $value) {
            Permiso::create($value);
        }
    }
}
