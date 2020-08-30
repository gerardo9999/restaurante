<?php

namespace App\Http\Livewire;

use App\producto as AppProducto;
use Livewire\Component;
use Livewire\WithPagination;

class Producto extends Component
{
    public $searchText ;
    use WithPagination;
    public function render()
    {
        $searchText = '%'.$this->searchText.'%';
        return view('component.producto',[
            'productos' =>AppProducto::join('categoria','categoria.id','=','producto.idCategoria')
            ->select('producto.id','descripcion','foto','producto.nombre','precio','idCategoria','categoria.nombre as categoria')
            ->where('producto.nombre','LIKE','%'.$searchText.'%')
            ->orWhere('categoria.nombre','LIKE','%'.$searchText.'%')
            ->paginate(10)
        ]);
    }
}
