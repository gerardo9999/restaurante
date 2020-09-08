<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Menu extends Component{
    
    use WithPagination; 
    public $formulario = false;
    public $table = true;



    public function render(){
        return view('table.menu');
    }

    public function mostrarFormulario(){
        $this->formulario = true;
        $this->table = false;
    }
    public function agregarProducto(){
        $this->table=false;
    }
}
