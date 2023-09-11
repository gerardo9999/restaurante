<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function perfil()  {

        $user = User::find(Auth::user()->id);
        return view('src.modules.configuracion.perfil',[
            'user' => $user
        ]);
    }
}
