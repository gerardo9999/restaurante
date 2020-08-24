<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class ctrlCategoria extends Controller
{
    public function index(Request $request){
        if ($request) {
            $query = trim($request->get('searchText'));
            $categorias = categoria::select('id','nombre')
            ->where('categoria.nombre','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(10);
        }
        return view('modules.categoria.table',[
            'categorias'=>$categorias,
            'searchText'=> $query
        ]);
    }
    public function validacion($request){
        $reglas = [
            'nombre'=> ['required','string']
        ];
        $this->validate($request,$reglas);
    }
    public function store(Request $request){
        

        $this->validacion($request);
        $categoria = new categoria();
        $categoria->nombre = $request->get('nombre');
        $categoria->save();

        return redirect('/categorias')->with('success','el registro se ha guardado correctamente');
    }
    public function update(Request $request,$id){
        
        $this->validacion($request);
        $categoria =  categoria::findOrFail($id);
        $categoria->nombre = $request->get('nombre');
        $categoria->update();

        return redirect('/categorias')->with('info','el registro se ha actualizado correctamente');  
    }
    public function destroy($id){
        $categoria =  categoria::findOrFail($id);
        $categoria->delete();

        return redirect('/categorias')->with('danger','el registro se ha eliminado correctamente');  
    }
}
