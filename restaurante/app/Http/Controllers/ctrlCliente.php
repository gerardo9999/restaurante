<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ctrlCliente extends Controller
{
    public function index(Request $request)
    {
         //if(!$request->ajax()) return redirect('/');
         $buscar = $request->buscar;
         $criterio = $request->criterio;
         if($buscar==''){
             $cliente= cliente::select('cliente.id','cliente.nombres',
             'cliente.apellidos',
             'cliente.login',
             'cliente.password',
             'cliente.empresa',
             'cliente.telefono',
             'cliente.direccion',
             'cliente.email',
             'cliente.estado')
             ->orderBy('cliente.id','desc')->paginate(10);
         }
         else{
             $cliente= cliente::select('cliente.id','cliente.nombres')
             ->where('cliente.'.$criterio, 'like', '%'.$buscar.'%')
             ->orderBy('cliente.id','desc')->paginate(10);            
         }
         
         return [
             'pagination' => [
                 'total'        => $cliente->total(),
                 'current_page' => $cliente->currentPage(),
                 'per_page'     => $cliente->perPage(),
                 'last_page'    => $cliente->lastPage(),
                 'from'         => $cliente->firstItem(),
                 'to'           => $cliente->lastItem(),
             ],
             'cliente' => $cliente
         ];
     }
     public function store(Request $request)
     {        
         $cliente = new cliente();
         $cliente->nombres = $request->nombres;
         $cliente->apellidos = $request->apellidos;
         $cliente->login = $request->login;
         $cliente->password = Hash::make( $request->password);
         $cliente->empresa = $request->empresa;
         $cliente->telefono = $request->telefono;
         $cliente->direccion = $request->direccion;
         $cliente->email = $request->email;
         $cliente->estado = 1;
         $cliente->save();
     }
     public function update(Request $request)
     {
         if(!$request->ajax()) return redirect('/');
         $cliente= cliente::findOrFail($request->id);
         $cliente->nombres = $request->nombres;
         $cliente->apellidos = $request->apellidos;
         $cliente->login = $request->login;
         $cliente->password =Hash::make( $request->password);
         $cliente->empresa = $request->empresa;
         $cliente->telefono = $request->telefono;
         $cliente->direccion = $request->direccion;
         $cliente->email = $request->email;
         $cliente->estado = 1;
         $cliente->save();
     }
     public function delete(Request $request)
     {
         $cliente= cliente::findOrFail($request->id);
         $cliente->delete();
     }
     public function selectCliente(){
         $cliente = cliente::select('id','nombres')->orderBy('nombres', 'asc')->get();
         return ['cliente' => $cliente];
     }
    }
