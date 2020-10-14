<?php

namespace App\Http\Livewire;
use App\producto;
use Livewire\Component;
use Livewire\WithPagination;

class App extends Component{
    public $pedido = 0;
    use WithPagination;
    public $searchText;
    public $lista = 1;

    public function render(){
        $searchText = '%'.$this->searchText.'%';
        return view('livewire.app',[
            'productos'=>producto::where('producto.nombre','LIKE','%'.$searchText.'%')->paginate(12)
        ]);
    }


    public function mostrarLista(){
        $this->lista = 1;
    }
    // ocultarLista()
    public function ocultarLista(){
        $this->lista = 0;
    }

    public function verProducto($idProducto){
        $this->ocultarLista();
    }
    
}
