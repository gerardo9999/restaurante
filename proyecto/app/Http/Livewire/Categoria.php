<?php

namespace App\Http\Livewire;

use App\categoria as AppCategoria;
use Livewire\Component;
use Livewire\WithPagination;

class Categoria extends Component
{

    public $searchText; 

    use WithPagination; 
    
    public function render()
    {
        $searchText = '%'.$this->searchText.'%';

        return view('component.categoria',[
            'categorias' => AppCategoria::select('id','nombre')
            ->where('categoria.nombre','LIKE','%'.$searchText.'%')
            ->orderBy('id','desc')
            ->paginate(10)
        ]);
    }
}
