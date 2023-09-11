<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function index()
    {
        return view('src.pages.roles.index');
    }

    public function collection() {
        $roles = Rol::all();
        return response()->json(['data' => $roles]);
        // return response()->json($roles);
    }
}
