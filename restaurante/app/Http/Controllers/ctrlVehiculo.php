<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculo;
use App\repartidor;
class ctrlVehiculo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('searchText'));
            
            $vehiculos=vehiculo::join('repartidor','repartidor.id', '=', 'vehiculo.idRepartidor')
            ->select('vehiculo.tipoVehiculo', 
            'vehiculo.caracteristicas', 
            'vehiculo.placa', 
            'vehiculo.id', 
            'repartidor.nombre', 
            'repartidor.apellidos', 
            'repartidor.login', 
            'repartidor.password', 
            'repartidor.cedulaID', 
            'repartidor.telefono', 
            'repartidor.direccion')->where('repartidor.nombre','LIKE','%'.$query.'%')
            ->paginate(10);

        }
       
     
        return view('modules.vehiculo.table',['vehiculos'=>$vehiculos,'searchText'=>$query ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $repartidores=repartidor::all();
        return view('modules.vehiculo.frmCreate',['repartidores'=>$repartidores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new vehiculo();
        $vehiculo->tipoVehiculo = $request->get('tipoVehiculo');
        $vehiculo->caracteristicas = $request->get('caracteristicas');
        $vehiculo->placa = $request->get('placa');
        $vehiculo->idRepartidor = $request->get('idRepartidor');
        $vehiculo->save();

        return redirect('/vehiculos')->with('success','el registro se ha guardado correctamente');
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
        $vehiculos=vehiculo::join('repartidor','repartidor.id', '=', 'vehiculo.idRepartidor')
        ->select('vehiculo.tipoVehiculo', 
        'vehiculo.caracteristicas', 
        'vehiculo.placa')->where('vehiculo.id','=',$id)
        ->get();
        $repartidores=repartidor::all();
        return view('modules.vehiculo.frmUpdate',['vehiculo'=>$vehiculos, 'repartidor'=>$repartidores]);
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
        $vehiculo = vehiculo::findOrFail($id);
        $vehiculo->tipoVehiculo = $request->get('tipoVehiculo');
        $vehiculo->caracteristicas = $request->get('caracteristicas');
        $vehiculo->placa = $request->get('placa');
        $vehiculo->idRepartidor = $request->get('idRepartidor');
        
        $vehiculo->update();
        
        return redirect('/vehiculos')->with('info','el registro se ha guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = vehiculo::findOrFail($id);
        $vehiculo->delete();

        return redirect('/vehiculos')->with('danger','el registro se ha guardado correctamente');
    }
}
