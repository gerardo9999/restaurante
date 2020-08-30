<?php

namespace App\Http\Controllers;

use App\categoria;
use Illuminate\Http\Request;
use App\producto;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ctrlProducto extends Controller
{
    public function index(Request $request){
        
        if($request){
            $query = trim($request->get('searchText'));
            $productos = producto::join('categoria','categoria.id','=','producto.idCategoria')
            ->select('producto.id','descripcion','foto','producto.nombre','precio','idCategoria','categoria.nombre as categoria')
            ->where('producto.nombre','LIKE','%'.$query.'%')
            ->orWhere('categoria.nombre','LIKE','%'.$query.'%')
            ->paginate(5);
        }
        return view('modules.producto.frmTable',[
            'productos'=>$productos,
            'searchText'=>$query,

            ]);
    }
    public function validacion($request){
        
        $reglas = [
            'nombre'        => 'required',
            'precio'        => 'required','numeric','between:0,99.99',
            'foto'          => 'image|mimes:jpeg,png',
            'descripcion'   => 'required'
        ];
        $this->validate($request,$reglas);

    }
    public function create(){
        $categorias = categoria::all();

        return view('modules.producto.frmCreate',[
            'categorias'=> $categorias
        ]);
    }
    public function store(Request $request){

        $this->validacion($request);

        try{
            DB::beginTransaction();
            $producto = new producto();
            $producto->nombre            = $request->nombre;
            $producto->precio            =  $request->precio;
            $producto->descripcion       = $request->descripcion;

            if($request->file('foto')){
                $path = Storage::disk('public')->put('imagenes',$request->file('foto'));
                $producto->foto = $path; 
            }else{
                $producto->foto = 'imagenes/plato1.png';
            }
            
            $producto->idCategoria = $request->idCategoria;
            $producto->save();


            DB::commit();
            
        }catch(\Exception $e){
            DB::rollback();
        }
        return Redirect::to('/productos')->with('success','El registro se ha realizado correctamente');
    }
    public function edit($id){
        
        $producto = producto::join('categoria','categoria.id','=','producto.idCategoria')
            ->select('producto.id','descripcion','foto','producto.nombre','precio','idCategoria','categoria.nombre as categoria')
            ->where('producto.id','=',$id)->get();
        $categorias = categoria::all();

        return view('modules.producto.frmUpdate',[
            'producto'=>$producto,
            'categorias'=>$categorias
            ]);
    }
    public function update(Request $request,$id){
 

        $this->validacion($request);
        try{
            DB::beginTransaction();
            $producto = producto::findOrFail($id);
            $producto->nombre       = $request->nombre;
            $producto->precio       = $request->precio;
            $producto->descripcion  = $request->descripcion;
            if($request->file('foto')){
                $path = Storage::disk('public')->put('imagenes',$request->file('foto'));
                $producto->foto = $path; 
            }
            $producto->idCategoria = $request->idCategoria;
            $producto->update();
            DB::commit();
            
        }catch(\Exception $e){
            DB::rollback();
        }
        return Redirect::to('/productos')->with('success','El registro se ha realizado correctamente');
    }
    public function destroy($id){
        $hospital = producto::findOrFail($id);
        $hospital->delete();
        return Redirect::to('/productos')->with('danger','El registro se ha elimindado correctamente');
    }
}
