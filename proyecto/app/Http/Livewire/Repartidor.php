<?php

namespace App\Http\Livewire;

use App\repartidor as AppRepartidor;
use Livewire\Component;
use Livewire\WithPagination;


class Repartidor extends Component
{
    use WithPagination;
    public $searchText;
    public function render()
    {
        $searchText = '%'.$this->searchText.'%';
        return view('component.repartidor',[
            'repartidores' => AppRepartidor::where('repartidor.nombre','LIKE','%'.$searchText.'%')->paginate(5)
        
        ]);       
    }
}
