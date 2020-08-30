<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;

class ctrlCategoria extends Controller
{

    public function index(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if($buscar==''){
            $categoria= categoria::select('categoria.id','categoria.nombre')
            ->orderBy('categoria.id','desc')->paginate(10);
        }
        else{
            $categoria= categoria::select('categoria.id','categoria.nombre')
            ->where('categoria.'.$criterio, 'like', '%'.$buscar.'%')
            ->orderBy('categoria.id','desc')->paginate(10);            
        }
        
        return [
            'pagination' => [
                'total'        => $categoria->total(),
                'current_page' => $categoria->currentPage(),
                'per_page'     => $categoria->perPage(),
                'last_page'    => $categoria->lastPage(),
                'from'         => $categoria->firstItem(),
                'to'           => $categoria->lastItem(),
            ],
            'categoria' => $categoria
        ];
    }
    public function store(Request $request)
    {        
        $categoria = new categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();
    }
    public function update(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $categoria= categoria::findOrFail($request->id);
	    $categoria->nombre = $request->nombre;

        $categoria->save();
    }
    public function delete(Request $request)
    {
        $categoria= categoria::findOrFail($request->id);
        $categoria->delete();
    }
    /*public function selectCategoria(){
        $categoria = categoria::select('id','nombre')->orderBy('nombre', 'asc')->get();
        return ['categoria' => $categoria];
    }*/

    /*
    public function index(Request $request){
        if ($request) {
            $query = trim($request->get('searchText'));
            $categorias = categoria::select('id','nombre')
            ->where('categoria.nombre','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(10);
        }
        return view('modules.categoria.frmTable',[
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
    */
}
