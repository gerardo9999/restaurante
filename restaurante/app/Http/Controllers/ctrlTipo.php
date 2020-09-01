<?php

namespace App\Http\Controllers;

use App\tipo;
use Illuminate\Http\Request;

class ctrlTipo extends Controller
{
    public function index(){
        return view('modules.tipo.frmIndex',[
            'tipos'=>tipo::all()
        ]);
    }
}
