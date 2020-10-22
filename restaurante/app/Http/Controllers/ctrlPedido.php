<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ubicacion;
use App\pedido;
use App\detallePedido;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ctrlPedido extends Controller
{      
    public function guardar(Request $request){
        
        $idUsuario = Auth::id();
        
        // return $request;
        $ubicacion = new ubicacion();
        $ubicacion->referencia = $request->referencia;
        $ubicacion->latitud    = $request->textlatitud;
        $ubicacion->longitud   = $request->textlongitud;
        $ubicacion->url        = $request->textlink;
        $ubicacion->save();

        $pedido = new pedido();
        $pedido->fecha = date('Y-m-d');
        $pedido->fechaentrega = $request->fecha_entrega;
        $pedido->montototal = $request->montoTotal;
        $pedido->estado = 0;    //pendiente
        $pedido->idUsuario = null;
        $pedido->idCliente = Auth::id();
        $pedido->idUbicacion = $ubicacion->id;
        $pedido->save();

        $count = $request->precio;

        for ($i=0; $i < $count; $i++) { 
            $subtotal = $request->cantidad[$i] * $request->precio[$i];

            $detalle = new detallepedido();
            $detalle->cantidad = $request->cantidad[$i];
            $detalle->subTotal = $subtotal;
            $detalle->idPedido = $pedido->id;
            $detalle->idProducto = $request->idProducto;
            $detalle->save();
        }

        return Redirect::to('/');

    }
}
