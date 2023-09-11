<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{
    public function empresa() {
        $user = User::find(Auth::user()->id);
        
        return view('src.modules.configuracion.empresa',[
            'user' => $user
        ]);
    }
}
