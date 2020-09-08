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
    public function mostrar(Request $request){
        
        // if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;
        
        if ($buscar==''){
            $producto = producto::join('categoria','producto.idCategoria','=','categoria.id')
            ->select('producto.id',
                     'producto.idCategoria',
                     'producto.nombre',
                     'producto.precio',
                     'producto.foto',
                     'categoria.nombre as categoria',
                     'producto.descripcion'
                     )
            ->orderBy('producto.id', 'desc')->paginate(10);
        }
        else{
            
            $producto = producto::join('categoria','producto.idCategoria','=','categoria.id')
            ->select('producto.id',
                        'producto.idCategoria',
                        'producto.nombre',
                        'producto.precio',
                        'producto.foto',
                        'categoria.nombre as categoria',
                        'producto.precio',
                        'producto.descripcion'
                        )
            ->where($criterio.'.nombre', 'like', '%'. $buscar . '%')
            ->orderBy('producto.id', 'desc')->paginate(10);
        }
        

        return [
            'pagination' => [
                'total'        => $producto->total(),
                'current_page' => $producto->currentPage(),
                'per_page'     => $producto->perPage(),
                'last_page'    => $producto->lastPage(),
                'from'         => $producto->firstItem(),
                'to'           => $producto->lastItem(),
            ],
            'producto' => $producto
        ];
    }
    
    public function guardar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $producto = new producto();
        $producto->idCategoria = $request->idCategoria;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;

        if($request->file('foto')){
            $path = Storage::disk('public')->put('imagenes',$request->file('foto'));
            $producto->foto = $path; 
        }else{
            $producto->foto = 'imagenes/plato1.png';
        }
        $producto->descripcion = $request->descripcion;
        $producto->save();
    }

    public function modificar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $producto = producto::findOrFail($request->id);
        $producto->idCategoria = $request->idCategoria;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;

        if($request->file('foto')){
            $path = Storage::disk('public')->put('imagenes',$request->file('foto'));
            $producto->foto = $path; 
        }
        $producto->descripcion = $request->descripcion;
        $producto->save();
    }

    public function eliminar(Request $request){
        // if (!$request->ajax()) return redirect('/');
        $producto = producto::findOrFail($request->id);
        $producto->delete();
      //  return ['producto' => $producto];
    }
}