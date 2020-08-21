<?php

namespace App\Http\Controllers;

use App\mesa;
use Illuminate\Http\Request;

class ctrlMesa extends Controller
{
    public function index(Request $request){
        if ($request) {
            $query = trim($request->get('searchText'));
            $mesas = mesa::where('mesa.ubicacion','LIKE','%'.$query.'%')
            ->where('mesa.descripcion','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(10);
        }
        return view('modules.mesa.table',[
            'mesas'=>$mesas,
            'searchText'=> $query
        ]);
    }
    public function validacion($request){
        $reglas = [
            'capacidad'=> ['required','numeric'],
            'descripcion'=> ['required','string'],
            'ubicacion'=> ['required','string']
        ];
        $this->validate($request,$reglas);
    }
    public function store(Request $request){
        
        $this->validacion($request);
        $mesa = new mesa();
        $mesa->capacidad = $request->get('capacidad');
        $mesa->descripcion = $request->get('descripcion');
        $mesa->ubicacion = $request->get('ubicacion');
        $mesa->ocupado = 1;
        $mesa->save();

        return redirect('/mesas')->with('success','el registro se ha guardado correctamente');
    }
    public function update(Request $request,$id){


        // return $request;

        // $this->validacion($request);
        $mesa =  mesa::findOrFail($id);


        $mesa->capacidad   =   $request->get('capacidad');
        $mesa->descripcion =   $request->get('descripcion');
        $mesa->ubicacion   =   $request->get('ubicacion');
        $mesa->ocupado   = 1;
        $mesa->update();


        return redirect('/mesas')->with('info','el registro se ha actualizado correctamente');  
    }
    public function destroy($id){
        $mesa =  mesa::findOrFail($id);
        $mesa->delete();

        return redirect('/mesas')->with('danger','el registro se ha eliminado correctamente');  
    }
}
