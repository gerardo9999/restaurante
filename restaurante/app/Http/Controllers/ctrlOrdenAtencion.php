<?php

namespace App\Http\Controllers;

use App\cliente;
use App\detalleOrden;
use App\mesa;
use Illuminate\Http\Request;
use App\ordenAtencion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function buscarDetalle(Request $request){


        $id = $request->filtro;
        $detalle = detalleOrden::join('ordenatencion','ordenatencion.id','=','detalleorden.idOrdenAtencion')
        ->join('producto','producto.id','=','detalleorden.idProducto')->select('detalleorden.id as idDetalle',
        'detalleorden.cantidad','detalleorden.id','detalleorden.idProducto','detalleorden.idOrdenAtencion'
        ,'producto.precio','producto.foto','producto.nombre','ordenatencion.idMesa'
        )
        ->where('ordenatencion.idMesa','=',$id)->where('ordenatencion.estado','=',1)
        ->get();

        $cliente = ordenAtencion::join('cliente','cliente.id','=','ordenatencion.idCliente')
        ->join('mesa','mesa.id','=','ordenatencion.idMesa')->where('mesa.id','=',$id)
        ->select(DB::raw('CONCAT(nombres, ", ", apellidos) as nombreCompleto'),'cliente.id','empresa')->where('ordenatencion.estado','=',1)
        ->get();
        



        return ['detalle'   => $detalle,
                'cliente'   => $cliente,
                'idMesa'    => $detalle[0]->idMesa,
                'idCliente' => $cliente[0]->id,
                'idOrdenAtencion'   => $detalle[0]->idOrdenAtencion 
                ];
    }
    public function modificarDetalle(Request $request){
        
        
        $id = auth()->id();

        $ordenAtencion = ordenAtencion::findOrFail($request->idOrdenAtencion);
        $ordenAtencion->estado = 1;
        $ordenAtencion->idUsuario = $id;
        $ordenAtencion->idCliente = $request->idCliente;
        $ordenAtencion->idMesa = $request->idMesa;
        $ordenAtencion->montoTotal = 0;
        $ordenAtencion->fecha= date('Y-m-d');
        $ordenAtencion->update();

        $detalle = $request->data;
        $total = 0;

        foreach($detalle as $ep=>$det)
        {
            
            $detalle = detalleOrden::findOrFail($det['idDetalle']);
            $detalle->cantidad = $det['cantidad'];
            $detalle->idProducto = $det['idProducto'];
            $detalle->idOrdenAtencion = $request->idOrdenAtencion;
            $detalle->update();

            $total = $total + ($det['cantidad']*$det['precio']);
        }    

        $ordenAtencion->montoTotal = $total;
        $ordenAtencion->update();

        $mesa = mesa::findOrFail($request->idMesa);
        $mesa->ocupado = 1; 
        $mesa->update();
    }
}
