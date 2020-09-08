<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ordenAtencion;
use Illuminate\Support\Facades\Auth;

class ctrlOrdenAtencion extends Controller
{
    
    
    
    public function guardar(Request $request){

        
        $ordenAtencion = new ordenAtencion();
        $ordenAtencion->estado = 1;


    }
}
