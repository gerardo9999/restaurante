<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reserva;
use App\cliente;
use Illuminate\Support\Facades\DB;

class ctrlReserva extends Controller
{
    public function mostrar(Request $request){
        
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
       


        
        if ($buscar==''){
            $reserva = reserva::join('cliente','reserva.idCliente','=','cliente.id')
            ->select('reserva.id',
                     'reserva.idCliente',
                     'reserva.comensales',
                     'reserva.telefono',
                     'reserva.fecha',
                     'reserva.hora',
                     'reserva.observacion',
                     DB::raw('CONCAT(nombres, ", ", apellidos) as cliente')
                    
                     )
            ->orderBy('reserva.id', 'desc')->paginate(10);
        }
        else{
            
            $reserva = reserva::join('cliente','reserva.idCliente','=','cliente.id')
            ->select('reserva.id',
                        'reserva.idCliente',
                        'reserva.comensales',
                        'reserva.telefono',
                        'reserva.fecha',
                        'reserva.hora',
                        'reserva.observacion',
                        DB::raw('CONCAT(nombres, ", ", apellidos) as cliente')
                       
                        )
            ->where($criterio.'.comensales', 'like', '%'. $buscar . '%')
            ->orderBy('reserva.id', 'desc')->paginate(10);
        }
        

        return [
            'pagination' => [
                'total'        => $reserva->total(),
                'current_page' => $reserva->currentPage(),
                'per_page'     => $reserva->perPage(),
                'last_page'    => $reserva->lastPage(),
                'from'         => $reserva->firstItem(),
                'to'           => $reserva->lastItem(),
            ],
            'reserva' => $reserva
        ];
    }
    
    public function guardar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $reserva = new reserva();
       
        $reserva->comensales = $request->comensales;
        $reserva->telefono = $request->telefono;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->observacion = $request->observacion;
        $reserva->idCliente = $request->idCliente;
        $reserva->save();
    }

    public function modificar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $reserva = reserva::findOrFail($request->id);
        $reserva->comensales = $request->comensales;
        $reserva->telefono = $request->telefono;
        $reserva->fecha = $request->fecha;
        $reserva->hora = $request->hora;
        $reserva->observacion = $request->observacion;
        $reserva->idCliente = $request->idCliente;
        $reserva->update();
    }

    public function eliminar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $reserva = reserva::findOrFail($request->id);
        $reserva->delete();
        return ['reserva' => $reserva];
    }
}
