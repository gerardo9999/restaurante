<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ctrlCliente extends Controller
{
    public function index(Request $request){

        if($request){
            $query = trim($request->get('searchText'));
            $clientes = cliente::where('cliente.nombres','LIKE','%'.$query.'%')->paginate(5);
        }

        return view('modules.cliente.table',[
            'clientes'=>$clientes,
            'searchText'=>$query
        ]);
    }
    public function create(){
        return view('modules.cliente.frmCreate');
    }
    public function store(Request $request){

        $cliente = new cliente();
        $cliente->nombres = $request->get('nombres');
        $cliente->apellidos = $request->get('apellidos');
        $cliente->login = $request->get('login');
        $cliente->password = Hash::make($request->get('password'));
        $cliente->empresa = $request->get('empresa');
        $cliente->telefono = $request->get('telefono');
        $cliente->direccion = $request->get('direccion');
        $cliente->email = $request->get('email');
        $cliente->estado ='activado';
        $cliente->save();

        return redirect('/clientes')->with('success','el registro se ha guardado correctamente');

    }

    public function edit($id){
        $cliente = cliente::where('cliente.id','=',$id)->get();
        return view('modules.cliente.frmUpdate',[
            'cliente'=>$cliente
        ]);
    }

    public function update(Request $request,$id){

        $cliente = cliente::findOrFail($id);
        $cliente->nombres = $request->get('nombres');
        $cliente->apellidos = $request->get('apellidos');
        $cliente->login = $request->get('login');
        $cliente->password = Hash::make($request->get('password'));
        $cliente->empresa = $request->get('empresa');
        $cliente->telefono = $request->get('telefono');
        $cliente->direccion = $request->get('direccion');
        $cliente->email = $request->get('email');
        $cliente->estado ='activado';
        $cliente->update();

        return redirect('/clientes')->with('info','el registro se ha guardado correctamente');
    }
    public function destroy($id){
        $cliente = cliente::findOrFail($id);
        $cliente->delete();

        return redirect('/clientes')->with('danger','el registro se ha guardado correctamente');
    }
}
