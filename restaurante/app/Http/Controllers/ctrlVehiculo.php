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
        if(!$request->ajax()) return redirect('/');
         $buscar = $request->buscar;
         $criterio = $request->criterio;
         if($buscar==''){
             $vehiculo= vehiculo::select('vehiculo.id','vehiculo.tipoVehiculo',
             'vehiculo.caracteristicas',
             'vehiculo.placa',
             'repartidor.nombre', 
             'repartidor.apellidos', 
             'repartidor.login', 
             'repartidor.password', 
             'repartidor.cedulaID', 
             'repartidor.telefono', 
             'repartidor.direccion')
             ->orderBy('vehiculo.id','desc')->paginate(10);
         }
         else{
             $vehiculo= vehiculo::select('vehiculo.id','vehiculo.tipoVehiculo','caracteristicas','placa')
             ->where('vehiculo.'.$criterio, 'like', '%'.$buscar.'%')
             ->orderBy('vehiculo.id','desc')->paginate(10);            
         }
         
         return [
             'pagination' => [
                 'total'        => $vehiculo->total(),
                 'current_page' => $vehiculo->currentPage(),
                 'per_page'     => $vehiculo->perPage(),
                 'last_page'    => $vehiculo->lastPage(),
                 'from'         => $vehiculo->firstItem(),
                 'to'           => $vehiculo->lastItem(),
             ],
             'vehiculo' => $vehiculo
         ];
     }
     public function store(Request $request)
     {        
         $vehiculo = new vehiculo();
         $vehiculo->tipoVehiculo = $request->tipoVehiculo;
         $vehiculo->caracteristicas = $request->caracteristicas;
         $vehiculo->placa = $request->placa;
         $vehiculo->idRepartidor = $request->idRepartidor;
         $vehiculo->save();
     }
     public function update(Request $request)
     {
         if(!$request->ajax()) return redirect('/');
         $vehiculo= reserva::findOrFail($request->id);
         $vehiculo->tipoVehiculo = $request->tipoVehiculo;
         $vehiculo->caracteristicas = $request->caracteristicas;
         $vehiculo->placa = $request->placa;
         $vehiculo->idRepartidor = $request->idRepartidor;
         $vehiculo->save();
     }
     public function delete(Request $request)
     {
         $vehiculo= vehiculo::findOrFail($request->id);
         $vehiculo->delete();
     }
     public function selectVehiculo(){
         $vehiculo = vehiculo::select('id','tipoVehiculo')->orderBy('tipoVehiculo', 'asc')->get();
         return ['vehiculo' => $vehiculo];
     }
    
}