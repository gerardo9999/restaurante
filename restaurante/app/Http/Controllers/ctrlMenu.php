<?php

namespace App\Http\Controllers;

use App\listaMenu;
use App\menu;
use App\producto;
use Illuminate\Http\Request;

class ctrlMenu extends Controller
{
<<<<<<< HEAD
    public function mostrar(Request $request){
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if($buscar==''){
            $menu= menu::select('menu.id','menu.fecha')
            ->orderBy('menu.id','desc')->paginate(20);
        }
        else{
            $menu= menu::select('menu.id','menu.fecha')
            ->where('menu.'.$criterio,'=',$buscar)
            ->orderBy('menu.id','desc')->paginate(20);            
        }
        
        return [
            'pagination' => [
                'total'        => $menu->total(),
                'current_page' => $menu->currentPage(),
                'per_page'     => $menu->perPage(),
                'last_page'    => $menu->lastPage(),
                'from'         => $menu->firstItem(),
                'to'           => $menu->lastItem(),
            ],
            'menus' => $menu
=======
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar(){
        return view('modules.lista.frmIndex');
    }

    public function validacion($request){
        $reglas = [
            'fecha'=> ['required','date']
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
        ];
    }

<<<<<<< HEAD
    public function guardar(Request $request){
        
=======

    public function crear()
    {
        $productos = producto::all();
        return view('modules.menu.frmIndex',[
            'productos' => $productos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $this->validacion($request);
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
        $menu = new menu();
        $menu->fecha = $request->fecha;
        $menu->save();

        
        $listaMenu = $request->data;

        foreach($listaMenu as $ep=>$det)
        {
            $listaMenu = new listaMenu();
            $listaMenu->estado = 1;
            $listaMenu->idProducto = $det['id'];
            $listaMenu->idMenu = $menu->id;
            $listaMenu->save();
        }    
    }
<<<<<<< HEAD
    public function listaMenu(){
=======
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function modificar(Request $request, $id)
    {
           
        $this->validacion($request);
        $menu =  menu::findOrFail($id);
        $menu->fecha = $request->get('fecha');
        $menu->update();
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80

    }

<<<<<<< HEAD
=======
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $menu =  menu::findOrFail($id);
        $menu->delete();
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80

   
}
