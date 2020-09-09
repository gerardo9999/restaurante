<?php

namespace App\Http\Livewire;

use App\listaMenu;
use App\menu;
use App\producto;
use Livewire\Component;
use Livewire\WithPagination;

class Lista extends Component
{
    public $searchText; 
    public $productos = "Productos" ;
    
    use WithPagination; 



    public function render(){
        
        $searchText = $this->searchText;
        return view('component.lista',[
            'listas'=> menu::where('menu.fecha','=',$searchText)->paginate(10)
        ]);




    }
    public function buscarProducto($id){
        $productos = listaMenu::join('producto','listamenu.idProducto','=','producto.id')
        ->join('menu','menu.id','=','listamenu.idMenu')->where('menu.id','=',$id)->get();
        $this->productos = $productos;

    }
}
