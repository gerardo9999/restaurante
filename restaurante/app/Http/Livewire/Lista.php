<?php

namespace App\Http\Livewire;

use App\listaMenu;
use App\menu;
use Livewire\Component;

class Lista extends Component
{
    public $fecha;  
    public function render()
    {
        
        $fecha = $this->fecha;
        return view('component.lista',[
            'listas'=> menu::where('menu.fecha','=',$fecha)->paginate(10)
        ]);
    }
}
