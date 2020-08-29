<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedido;
use App\usuario;
use App\cliente;
use App\repartidor;
use App\ubicacion;
class ctrlPedido extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('searchText'));
            $pedidos = pedido::join('usuario','usuario.id','=','pedido.idUsuario','cliente','cliente.id','=','pedido.idCliente','repartidor','repartidor.id','=','pedido.idRepartidor','ubicacion','ubicacion.id','=','pedido.idUbicacion')
            ->select('pedido.id',
            'pedido.fecha',
            'pedido.fechaentrega',
            'pedido.horaentrega',
            'pedido.glosa',
            'pedido.montototal',
            'pedido.repartidor',
            'pedido.estado',
            'usuario.id',
            'usuario.nombre',
            'usuario.apellidos',
            'usuario.login',
            'usuario.password',
            'id.cliente',
            'cliente.nombres',
            'cliente.apellidos',
            'cliente.login',
            'cliente.password',
            'cliente.empresa',
            'cliente.telefono',
            'cliente.direccion',
            'cliente.email',
            'cliente.estado',
            'ubicacion.id',
            'ubicacion.latitud',
            'ubicacion.longitud',
            'ubicacion.referencia',
            'ubicacion.link',
            'idUsuario',
            'idCliente',
            'idRepartidor',
            'idUbicacion',
            'usuario.nombre as usuario,', 'cliente.nombres as cliente,','repartidor.nombre as repartidor,','ubicacion.referencia as ubicacion,')
            ->where('pedido.nombre','LIKE','%'.$query.'%')
            ->orWhere('categoria.nombre','LIKE','%'.$query.'%')
            ->paginate(5);
        }
        return view('modules.pedido.frmTable',[
            'pedidos'=>$pedidos,
            'searchText'=>$query,

            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
