<?php

namespace App\Http\Controllers;
use App\menu;
use App\producto;
use Illuminate\Http\Request;

class ctrlMenu extends Controller
{
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
        ];
        $this->validate($request,$reglas);
    }


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
        $menu = new menu();
        $menu->fecha = $request->get('fecha');
        $menu->save();

        return redirect('/menus')->with('success','el registro se ha guardado correctamente');
    }
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

        return redirect('/menus')->with('info','el registro se ha actualizado correctamente');  
    }

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

        return redirect('/menus')->with('danger','el registro se ha eliminado correctamente');  
    }
}
