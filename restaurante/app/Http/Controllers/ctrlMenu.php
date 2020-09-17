<?php

namespace App\Http\Controllers;

use App\listaMenu;
use App\menu;
use App\precios;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ctrlMenu extends Controller
{
    public function mostrar(Request $request){
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if($buscar==''){
            $menu= menu::select('menu.id','estado','menu.fecha')
            ->orderBy('menu.id','desc')->paginate(20);
        }
        else{
            $menu= menu::select('menu.id','estado','menu.fecha')
            ->where('menu.'.$criterio,'=',$buscar)
            ->orderBy('menu.id','desc')->paginate(20);            
        }
        
        return [
            'pagination' => [
                'total'        => $menu->total(),
                'current_page' => $menu->currentPage(),
                'per_page'     => $menu->perPage(),
                'last_page'    => $menu->lastPage(),
                'from'         => $menu->firstItem(),
                'to'           => $menu->lastItem(),
            ],
            'menus' => $menu
        ];
    }

    public function guardar(Request $request){
        
        DB::update('UPDATE menu set estado = 0');

        $menu = new menu();
        $menu->fecha = $request->fecha;
        $menu->estado=1;
        $menu->save();
        $listaMenu = $request->data;

        foreach($listaMenu as $ep=>$det){
            
            $precio = new precios();
            $precio->fecha = $request->fecha;
            $precio->precio = $det['precio'] ;
            $precio->idProducto = $det['id'];
            $precio->save();

            $producto = producto::findOrFail($det['id']);
            $producto->precio = $precio->precio;
            $producto->update(); 

            $listaMenu = new listaMenu();
            $listaMenu->estado = 1;
            $listaMenu->idProducto = $det['id'];

            $listaMenu->idMenu = $menu->id;
            $listaMenu->save();
        }    
    }
    public function listaMenu(){

    }
}
