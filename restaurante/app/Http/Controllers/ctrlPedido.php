<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\cliente;
use App\repartidor;
use App\ubicacio;
use App\usuario;
use App\producto;
use App\detallePedido;
use App\pedido;
use Illuminate\Support\Facades\DB;
class ctrlPedido extends Controller
{
    public function mostrar(Request $request){
        
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->get('buscar');
        $criterio = $request->criterio;
           
        
        if($buscar==""){
            $pedido = pedido::join('repartidor','repartidor.id','=','pedido.idRepartidor')->join('ubicacion','ubicacion.id','=','pedido.idUbicacion')
            ->join('cliente','cliente.id','=','pedido.idCliente')->join('detallePedido','detallePedido.idPedido','=','pedido.id')
            ->join('producto','producto.id','=','detallePedido.idProducto')
            ->select(
                "pedido.id",
                "pedido.fecha",
                "pedido.fechaEntrega",
                "pedido.horaEntrega",
                "pedido.glosa",
                "pedido.montoTotal",
                "pedido.estado",
                "pedido.idCliente",
                "cliente.nombres",
                "cliente.apellidos",
                DB::raw('CONCAT(nombres, " ",apellidos)as nombreCompleto')
            )
            ->orderBy('pedido.id','desc')
            ->paginate(10);
        }else{
            $pedido = pedido::join('repartiodr','repartidor.id','=','pedido.idRepartidor')->join('ubicacion','ubicacion.id','=','pedido.idUbicacion')
            ->join('cliente','cliente.id','=','pedido.idCliente')->join('detallePedido','detallePedido.idPedido','=','pedido.id')
            ->join('producto','producto.id','=','detalle.idProductor')->select(
                "pedido.id",
                "pedido.fecha",
                "pedido.fechaEntrega",
                "pedido.horaEntrega",
                "pedido.glosa",
                "pedido.montoTotal",
                "pedido.estado",
                "idCliente",
                "cliente.nombres",
                "cliente.apellidos",
                DB::raw('CONCAT(nombres, " ",apellidos)as nombreCompleto')
            )
            ->orderBy('pedido.id','desc')
            ->where($criterio.'.nombres', 'like', '%'.$buscar.'%')
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
=======
use App\ubicacion;
use App\pedido;
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
            $subtotal = $request->cantidad[$id] * $request>precio[$i];

            $detalle = new detallepedido();
            $detalle->cantidad = $request->cantidad[$id];
            $detalle->cantidad = $subtotal;
            $detalle->idPedido = $pedido->id;
            $detalle->idProducto = $request->idProdcuto;
            $detalle->save();
        }

        return Redirect::to('/');

>>>>>>> 5d55e1bff9e7d53f09d9d9b4c30910255f169d5b
    }
}
