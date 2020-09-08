<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculo;
use App\repartidor;
class ctrlVehiculo extends Controller
{
    
    public function mostrar(Request $request){
        
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
       


        
        if ($buscar==''){
            $vehiculo = vehiculo::join('repartidor','vehiculo.idRepartidor','=','repartidor.id')
            ->select('vehiculo.id',
                     'vehiculo.idRepartidor',
                     'vehiculo.tipoVehiculo',
                     'vehiculo.caracteristicas',
                     'vehiculo.placa',
                     'repartidor.nombre as repartidor'
                    
                     )
            ->orderBy('vehiculo.id', 'desc')->paginate(10);
        }
        else{
            
            $vehiculo = vehiculo::join('repartidor','vehiculo.idRepartidor','=','repartidor.id')
            ->select('vehiculo.id',
                        'vehiculo.idRepartidor',
                        'vehiculo.tipoVehiculo',
                        'vehiculo.caracteristicas',
                        'vehiculo.placa',
                        'repartidor.nombre as repartidor'
                       
                        )
            ->where($criterio.'.tipoVehiculo', 'like', '%'. $buscar . '%')
            ->orderBy('vehiculo.id', 'desc')->paginate(10);
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
    
    public function guardar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $vehiculo = new vehiculo();
       
        $vehiculo->tipoVehiculo = $request->tipoVehiculo;
        $vehiculo->caracteristicas = $request->caracteristicas;
        $vehiculo->placa = $request->placa;
        $vehiculo->idRepartidor = $request->idRepartidor;
        $vehiculo->save();
    }

    public function modificar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $vehiculo = vehiculo::findOrFail($request->id);
        $vehiculo->tipoVehiculo = $request->tipoVehiculo;
        $vehiculo->caracterissticas = $request->caracteristicas;
        $vehiculo->placa = $request->placa;
        $vehiculo->idRepartidor = $request->idRepartidor;
        $vehiculo->save();
    }

    public function eliminar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $vehiculo = vehiculo::findOrFail($request->id);
        $vehiculo->delete();
        return ['vehiculo' => $vehiculo];
    }   
}