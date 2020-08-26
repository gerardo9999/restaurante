<?php

namespace App\Http\Controllers;
use App\repartidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ctrlRepartidor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $repartidores = repartidor::all();
         if($request){
            $query = trim($request->get('searchText'));
            $repartidores = repartidor::where('repartidor.nombre','LIKE','%'.$query.'%')->paginate(5);
        }

        return view('modules.repartidor.table',[
            'repartidor'=>$repartidores,
            'searchText'=>$query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.repartidor.frmCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repartidor = new cliente();
        $repartidor->nombre = $request->get('nombre');
        $repartidor->apellidos = $request->get('apellidos');
        $repartidor->login = $request->get('login');
        $repartidor->password = $request->get('password');
        $repartidor->cedulaID = $request->get('cedulaID');
        $repartidor->telefono = $request->get('telefono');
        $repartidor->direccion = $request->get('direccion');
        $repartidor->save();

        return redirect('/repartidores')->with('success','el registro se ha guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repartidor = repartidor::where('repartidor.id','=',$id)->get();
        return view('modules.cliente.frmUpdate',[
            'repartidor'=>$repartidor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repartidor = cliente::findOrFail($id);
        $repartidor->nombre = $request->get('nombres');
        $repartidor->apellidos = $request->get('apellidos');
        $repartidor->login = $request->get('login');
        $repartidor->password =Hash::make( $request->get('password'));
        $repartidor->cedulaID = $request->get('cedulaID');
        $clienrepartidorte->telefono = $request->get('telefono');
        $repartidor->direccion = $request->get('direccion');
        
        $repartidor->update();

        return redirect('/repartidores')->with('info','el registro se ha guardado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $repartidor = repartidor::findOrFail($id);
        $repartidor->delete();

        return redirect('/repartidores')->with('danger','el registro se ha guardado correctamente');
    }
}
