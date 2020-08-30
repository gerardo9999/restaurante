<?php

namespace App\Http\Livewire;

use App\cliente as AppCliente;
use Livewire\Component;
use Livewire\WithPagination;

class Cliente extends Component
{
    use WithPagination;
    public $searchText;
    public function render()
    {
        $searchText = '%'.$this->searchText.'%';    
        return view('component.cliente',[
            'clientes' => AppCliente::where('cliente.nombres','LIKE','%'.$searchText.'%')
                                     ->orWhere('cliente.apellidos','LIKE','%'.$searchText.'%')->paginate(5)
            
        ]);
    }
}
