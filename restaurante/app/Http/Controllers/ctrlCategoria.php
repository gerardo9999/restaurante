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

    }
