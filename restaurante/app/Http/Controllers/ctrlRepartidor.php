<?php

namespace App\Http\Controllers;
use App\repartidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ctrlRepartidor extends Controller
{

    public function index(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
         $buscar = $request->buscar;
         $criterio = $request->criterio;
         if($buscar==''){
             $repartidor= repartidor::select('repartidor.id','repartidor.nombre',
             'repartidor.apellidos',
             'repartidor.login',
             'repartidor.password',
             'repartidor.cedulaID',
             'repartidor.telefono',
             'repartidor.direccion')
             ->orderBy('repartidor.id','desc')->paginate(10);
         }
         else{
             $repartidor= repartidro::select('repartidor.id','repartidor.nombre')
             ->where('repartidor.'.$criterio, 'like', '%'.$buscar.'%')
             ->orderBy('repartidor.id','desc')->paginate(10);            
         }
         
         return [
             'pagination' => [
                 'total'        => $repartidor->total(),
                 'current_page' => $repartidor->currentPage(),
                 'per_page'     => $repartidor->perPage(),
                 'last_page'    => $repartidor->lastPage(),
                 'from'         => $repartidor->firstItem(),
                 'to'           => $repartidor->lastItem(),
             ],
             'repartidor' => $repartidor
         ];
     }
     public function store(Request $request)
     {        
         $repartidor = new repartidor();
         $repartidor->nombre = $request->nombre;
         $repartidor->apellidos = $request->apellidos;
         $repartidor->login = $request->login;
         $repartidor->password = Hash::make( $request->password);
         $repartidor->cedulaID = $request->cedulaID;
         $repartidor->telefono = $request->telefono;
         $repartidor->direccion = $request->direccion;
         $repartidor->save();
     }
     public function update(Request $request)
     {
         if(!$request->ajax()) return redirect('/');
         $repartidor= repartidor::findOrFail($request->id);
         $repartidor->nombre = $request->nombre;
         $repartidor->apellidos = $request->apellidos;
         $repartidor->login = $request->login;
         $repartidor->password =Hash::make( $request->password);
         $repartidor->cedulaID = $request->cedulaID;
         $repartidor->telefono = $request->telefono;
         $repartidor->direccion = $request->direccion;
         $repartidor->save();
     }
     public function delete(Request $request)
     {
         $repartidor= repartidor::findOrFail($request->id);
         $repartidor->delete();
     }
     public function selectRepartidor(){
         $repartidor = repartidor::select('id','nombre')->orderBy('nombre', 'asc')->get();
         return ['repartidor' => $repartidor];
     }

     
}
