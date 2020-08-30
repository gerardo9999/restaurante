<?php

namespace App\Http\Livewire;

use App\listaMenu;
use App\menu;
use Livewire\Component;
use Livewire\WithPagination;

class Lista extends Component
{
    public $searchText; 
    public $productos ;
    public $lista =false;
    use WithPagination; 



    public function render(){
        $searchText = $this->searchText;

        if($searchText){
            $lista = menu::where('menu.fecha','=',$searchText)->paginate(10); 
        }else{
            $lista = menu::paginate(10);
        }

        return view('component.lista',[
            'listas'=> $lista
        ]);
    }

    public function buscarProducto($id){        
        $productos = listaMenu::join('producto','listamenu.idProducto','=','producto.id')
        ->join('menu','menu.id','=','listamenu.idMenu')->where('menu.id','=',$id)->get();
        $this->productos = $productos;
    }
}
