<?php

namespace App\Http\Controllers;

use App\mesa;
use Illuminate\Http\Request;

class ctrlMesa extends Controller
{



    public function mostrar(Request $request){
        //if(!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if($buscar==''){
            $mesa= mesa::select('mesa.id','mesa.capacidad','descripcion','ocupado','ubicacion')
            ->orderBy('mesa.id','desc')->paginate(10);
        }
        else{
            $mesa= mesa::select('mesa.id','mesa.capacidad','descripcion','ocupado','ubicacion')
            ->where('mesa.'.$criterio,'=',$buscar)
            ->orderBy('mesa.id','desc')->paginate(10);            
        }
        
        return [
            'pagination' => [
                'total'        => $mesa->total(),
                'current_page' => $mesa->currentPage(),
                'per_page'     => $mesa->perPage(),
                'last_page'    => $mesa->lastPage(),
                'from'         => $mesa->firstItem(),
                'to'           => $mesa->lastItem(),
            ],
            'mesa' => $mesa
        ];
    }
    public function guardar(Request $request){        
        $mesa = new mesa();
        $mesa->capacidad = $request->capacidad;
        $mesa->descripcion = $request->descripcion;
        $mesa->ocupado = 1;
        $mesa->ubicacion = $request->ubicacion;
        $mesa->save();
    }
    public function modificar(Request $request){
        // if(!$request->ajax()) return redirect('/');
        $mesa = mesa::findOrFail($request->id);
        $mesa->capacidad = $request->capacidad;
        $mesa->descripcion = $request->descripcion;
        $mesa->ocupado = 1;
        $mesa->ubicacion = $request->ubicacion;
        $mesa->save();
    }
    public function eliminar(Request $request){
        $mesa= mesa::findOrFail($request->id);
        $mesa->delete();
    }
    public function desocupado(Request $request){
        $mesa= mesa::findOrFail($request->id);
        $mesa->delete();
    }
    // public function selectCategoria(){
    //     $mesa = mesa::select('id','nombre')->orderBy('nombre', 'asc')->get();
    //     return ['mesa' => $mesa];
    // }
    // public function index(Request $request){
    //     if ($request) {
    //         $query = trim($request->get('searchText'));
    //         $mesas = mesa::where('mesa.ubicacion','LIKE','%'.$query.'%')
    //         ->where('mesa.descripcion','LIKE','%'.$query.'%')
    //         ->orderBy('id','desc')
    //         ->paginate(10);
    //     }
    //     return view('modules.mesa.frmTable',[
    //         'mesas'=>$mesas,
    //         'searchText'=> $query
    //     ]);
    // }
    // public function validacion($request){
    //     $reglas = [
    //         'capacidad'=> ['required','numeric'],
    //         'descripcion'=> ['required','string'],
    //         'ubicacion'=> ['required','string']
    //     ];
    //     $this->validate($request,$reglas);
    // }
    // public function store(Request $request){
        
    //     $this->validacion($request);
    //     $mesa = new mesa();
    //     $mesa->capacidad = $request->get('capacidad');
    //     $mesa->descripcion = $request->get('descripcion');
    //     $mesa->ubicacion = $request->get('ubicacion');
    //     $mesa->ocupado = 1;
    //     $mesa->save();

    //     return redirect('/mesas')->with('success','el registro se ha guardado correctamente');
    // }
    // public function update(Request $request,$id){


    //     // return $request;

    //     // $this->validacion($request);
    //     $mesa =  mesa::findOrFail($id);


    //     $mesa->capacidad   =   $request->get('capacidad');
    //     $mesa->descripcion =   $request->get('descripcion');
    //     $mesa->ubicacion   =   $request->get('ubicacion');
    //     $mesa->ocupado   = 1;
    //     $mesa->update();


    //     return redirect('/mesas')->with('info','el registro se ha actualizado correctamente');  
    // }
    // public function destroy($id){
    //     $mesa =  mesa::findOrFail($id);
    //     $mesa->delete();

    //     return redirect('/mesas')->with('danger','el registro se ha eliminado correctamente');  
    // }
    // public function ocupar($id){
    //     $mesa =  mesa::findOrFail($id);
    //     $mesa->ocupado = 0;
    //     $mesa->update();

    //     return redirect('/mesas')->with('danger','la mesa ha sido ocupada');  
    // }

    // public function desocupar($id){
    //     $mesa =  mesa::findOrFail($id);
    //     $mesa->ocupado = 1;
    //     $mesa->update();
    //     return redirect('/mesas')->with('info','la mesa ha sido desocupada');  
    // }
}
