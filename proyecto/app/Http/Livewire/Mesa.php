<?php

namespace App\Http\Livewire;

use App\mesa as AppMesa;
use Livewire\Component;
use Livewire\WithPagination;

class Mesa extends Component
{
    public $searchText;
    use WithPagination;
    
    public function render(){

        $searchText = $this->searchText;
        
        if($searchText){
            $mesas = AppMesa::where('mesa.capacidad','=',$searchText)
                            ->orderBy('id','desc')
                            ->paginate(6);
        }else{
             $mesas = AppMesa::orderBy('id','desc')
            ->paginate(6);
        }
        return view('component.mesa',[
            'mesas' => $mesas
        ]);
    }
}