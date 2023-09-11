<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function permiso()
    {
        return view('src.modules.autorizacion.permiso',[
            'roles' => Rol::all()
        ]);
    }
}
