<?php

namespace App\Http\Controllers;

use App\detalleOrden;
use App\mesa;
use Illuminate\Http\Request;
use App\ordenAtencion;
use Illuminate\Support\Facades\Auth;

class ctrlOrdenAtencion extends Controller
{
    
    
    
    public function guardar(Request $request){

            $id = auth()->id();

            $ordenAtencion = new ordenAtencion();
            $ordenAtencion->estado = 1;
            $ordenAtencion->idUsuario = $id;
            $ordenAtencion->idCliente = $request->idCliente;
            $ordenAtencion->idMesa = $request->idMesa;
            $ordenAtencion->montoTotal = 0;
            $ordenAtencion->fecha= date('Y-m-d');
            $ordenAtencion->save();

            $detalle = $request->data;
            $total = 0;

            foreach($detalle as $ep=>$det)
            {
                
                $detalle = new detalleOrden();
                $detalle->cantidad = $det['cantidad'];
                $detalle->idProducto = $det['id'];
                $detalle->idOrdenAtencion = $ordenAtencion->id;
                $detalle->save();

                $total = $total + ($det['cantidad']*$det['precio']);
            }    

            $ordenAtencion->montoTotal = $total;
            $ordenAtencion->update();

            $mesa = mesa::findOrFail($request->idMesa);
            $mesa->ocupado = 1; 
            $mesa->update();

    }

    public function modificar(Request $request){
        
    }
}
