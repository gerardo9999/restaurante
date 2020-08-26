<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reserva;
use App\cliente;

class ctrlReserva extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            
            $reservas=reserva::join('cliente','cliente.id', '=', 'reserva.idcliente')
            ->select('reserva.comensales', 
            'reserva.telefono', 
            'reserva.fecha', 
            'reserva.hora',
            'reserva.observacion',
            'reserva.id', 
            'cliente.nombres', 
            'cliente.apellidos', 
            'cliente.login', 
            'cliente.password', 
            'cliente.empresa', 
            'cliente.telefono', 
            'cliente.direccion',
            'cliente.email',
            'cliente.estado')->where('cliente.nombres','LIKE','%'.$query.'%')
            ->paginate(10);

        }
       
        return view('modules.reserva.table', ['reservas'=>$reservas,'searchText'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=cliente::all();
        return view('modules.reserva.frmCreate',['clientes'=>$clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new reserva();
        $reserva->comensales = $request->get('comensales');
        $reserva->telefono = $request->get('telefono');
        $reserva->fecha = $request->get('fecha');
        $reserva->hora = $request->get('hora');
        $reserva->observacion = $request->get('observacion');
        $reserva->idCliente = $request->get('idCliente');
        $reserva->save();

        return redirect('/reservas')->with('success','el registro se ha guardado correctamente');
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
        $reservas=reserva::join('cliente','cliente.id', '=', 'reserva.idCliente')
        ->select('reserva.comensales', 
        'reserva.telefono', 
        'reserva.fecha',
        'reserva.hora',
        'reserva.observacion')->where('reserva.id','=',$id)
        ->get();
        $clientees=cliente::all();
        return view('modules.reserva.frmUpdate',['reserva'=>$reservas, 'cliente'=>$clientees]);
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
        $reserva = reserva::findOrFail($id);
        $reserva->comensales = $request->get('comensales');
        $reserva->telefono = $request->get('telefono');
        $reserva->fecha = $request->get('fecha');
        $reserva->hora = $request->get('hora');
        $reserva->observacion = $request->get('observacion');
        $reserva->idCliente = $request->get('idCliente');
        
        $reserva->update();
        
        return redirect('/reservas')->with('info','el registro se ha guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = reserva::findOrFail($id);
        $reserva->delete();

        return redirect('/reservas')->with('danger','el registro se ha guardado correctamente');
    }
}
