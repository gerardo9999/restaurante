<?php

namespace App\Http\Livewire;

use App\listaMenu;
use App\menu as AppMenu;
use App\precio;
use App\producto;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

use Livewire\WithFileUploads;

class Menu extends Component
{
    public $fecha ;
    public $idMenu ;

    public $precio ;

    use WithFileUploads;
    use WithPagination;

    // Buscar
    public $searchText;
    // variables de la interfaz
    public $title = 'Crear nuevo Menú';
    public $tabla = false;

    public function render(){
        $searchText = '%'.$this->searchText.'%';
        $idMenu = $this->idMenu;

        return view('component.menu',[
            
            'productos'=> producto::orderBy('id','desc')
                                    ->where('producto.nombre','LIKE','%'.$searchText.'%')
                                    ->paginate(10),
            'listaMenu' => listaMenu::join('producto','producto.id','=','listamenu.idProducto')
                                     ->join('menu','menu.id','=','listamenu.idMenu')
                                     ->select('listamenu.id','producto.nombre','listamenu.idProducto','producto.precio','listamenu.estado') 
                                     ->where('listamenu.idMenu','=',$idMenu)
                                      ->get()
        ]);
    }
    public function agregarProducto($id){
        $idMenu = $this->idMenu;

        $existe = DB::select("SELECT *FROM listamenu where listamenu.idProducto = $id and listaMenu.idMenu = $idMenu");

        if($existe){
            session()->flash('danger','El producto ya existe');
        }else{

        session()->flash('success','el producto se agrego correctamente');
            $lista = new listaMenu();
            $lista->estado = 1;
            $lista->idMenu = $this->idMenu;
            $lista->idProducto = $id;
            $lista->save();
        }
    }
    public function agregarMenu(){

        $menu = new AppMenu();
        $menu->fecha = $this->fecha;        
        $menu->save();


        
        $this->tabla = true;

        $this->idMenu = $menu->id;
        session()->flash('success','La fecha se agrego correctamente');
    }
    public function eliminarProducto($id){
        $lista = listaMenu::findOrFail($id);
        $lista->delete();

        session()->flash('danger','El producto fue eliminado del menu');
        
    }
    public function finalizar(){
        
        $this->tabla= false;
        session()->flash('danger','El menu ha sido guardado');
    }
    public function savePrecio($id){

        $precio = new precio();
        $precio->fecha= $this->fecha;
        $precio->precio = $this->precio;
        $precio->idProducto = $id;
        $precio->update();

        $producto = producto::findOrFail($id);
        $producto->precio = $precio->precio;
        $producto->update();

        session()->flash('info','El precio del producto ha sido actualizado');
    }

    public $foto;

    public function save(){
        $this->validate([
            'foto' => 'image|max:1024', // 1MB Max
        ]);

        $this->foto->public('photos');
        session()->flash('info','El precio del producto ha sido actualizado');
    }

    public function editarImagen($id){
    }

}
