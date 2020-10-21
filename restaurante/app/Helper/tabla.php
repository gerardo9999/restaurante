<?php

use App\listaMenu;
use App\menu;
use App\producto;

    function productos(){
        $productos = producto::all();
        return $productos;
    }

    function menu($categoria){

        $fechaActual = date('Y-m-d');

        $menu = listaMenu::join('menu','menu.id','=','listamenu.idMenu')
        ->join('producto','producto.id','listamenu.idProducto')
        ->join('categoria','menu.idCategoria','=','categoria.id')
        ->select('producto.id as idProducto',
                 'producto.foto',
                 'producto.nombre',
                 'producto.precio',
                 'listamenu.estado',
                 'menu.idCategoria')
        ->where('menu.fecha','=',$fechaActual)
        ->where('menu.estado','=',1)
        ->where('menu.idCategoria','=',$categoria)
        ->get(); 
        
        return $menu;
    }


    function listaMenu(){
        $fechaActual = date('Y-m-d');
        $listaMenu = listaMenu::join('menu','menu.id','=','listamenu.idMenu')
                                ->join('producto','producto.id','listamenu.idProducto')
                                ->join('categoria','menu.idCategoria','=','categoria.id')
                                ->select('producto.id as idProducto',
                                        'producto.foto',
                                        'producto.nombre',
                                        'producto.precio',
                                        'listamenu.estado',
                                        'categoria.nombre as categoria',
                                        'menu.idCategoria')
                                ->where('menu.fecha','=',$fechaActual)
                                ->where('menu.estado','=',1)
                                ->get();

        return $listaMenu;
    }

    function menuCategoria(){
        $menuCategoria = menu::join('categoria','categoria.id','=','menu.idCategoria')
                                ->where('menu.fecha',date('Y-m-d'))
                                ->paginate(10);
        return $menuCategoria;
    }
?>