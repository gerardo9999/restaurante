<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        if (request()->ajax()) {
            $users = User::all();
            $users->load('rol');
            return response()->json(['data' => $users]);
        } else {
            return view('src.pages.usuarios.index');
        }
    }
}
