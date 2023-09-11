<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' =>  'admin',
            'email' =>  'admin@gmail.com',
            'password' =>  Hash::make('12345678'),
            'avatar' => 'images/avatar.svg',
            'rol_id' => User::ADMINISTRADOR,
            'empresa_id' => 1,
            'dato_personal_id' => 1,
        ]);
    }
}
