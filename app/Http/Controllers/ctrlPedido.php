<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ubicacion;
use App\pedido;
use App\detallePedido;
use App\cliente;
use App\repartidor;
use App\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ctrlPedido extends Controller
{      
    public function guardar(Request $request){
        // $count = $request->precio;
        
        // return $count ;
        $idUsuario = Auth::id();
        
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

        $count = count($request->precio);

        for ($i=0; $i < $count; $i++) { 

            $subtotal = $request->cantidad[$i] * $request->precio[$i];

            $detalle = new detallepedido();
            $detalle->cantidad = $request->cantidad[$i];
            $detalle->subTotal = $subtotal;
            $detalle->idPedido = $pedido->id;
            $detalle->idProducto = $request->idproducto[$i];
            $detalle->save();
        }

        return Redirect::to('/');

    }

    public function mostrarPedidoRepartidor(Request $request){
        
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->get('buscar');
        $criterio = $request->criterio;
        $idRepartidor = Auth::id();
           
        
        if($buscar==""){
            $pedido = pedido::join('repartidor','pedido.idRepartidor','=','repartidor.id')->select(
                "pedido.id",
                "pedido.fecha",
                "pedido.cliente",
                "pedido.horaEntrega",
                "pedido.ubicacion",
                "pedido.montoTotal",
                "pedido.estado",
                "pedido.idRepartidor"
            )
            ->orderBy('pedido.id','desc')
            ->where('idRepartidor','=',$idRepartidor)
            ->paginate(10);
        }else{
            $pedido = pedido::join('repartidor','pedido.idRepartidor','=','repartidor.id')->select(
                "pedido.id",
                "pedido.fecha",
                "pedido.cliente",
                "pedido.horaEntrega",
                "pedido.ubicacion",
                "pedido.montoTotal",
                "pedido.estado",
                "idCRepartidor"
            )
            ->orderBy('pedido.id','desc')
            ->where('pedido.'.$criterio, '=',$buscar)
            ->where('idRepartidor','=',$idRepartidor)
            ->paginate(10);
        }

        return [

            'pagination' => [
                'total'        => $pedido->total(),
                'current_page' => $pedido->currentPage(),
                'per_page'     => $pedido->perPage(),
                'last_page'    => $pedido->lastPage(),
                'from'         => $pedido->firstItem(),
                'to'           => $pedido->lastItem(),
            ],
            'pedido' => $pedido,
        ];
    }


    
}
