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
    public function index(Request $request)
    {
         // $repartidores = repartidor::all();
         if($request){
            $query = trim($request->get('searchText'));
            $repartidores = repartidor::where('repartidor.nombre','LIKE','%'.$query.'%')->paginate(5);
        }

        return view('modules.repartidor.frmTable',[
            'repartidores'=>$repartidores,
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
        $repartidor = new repartidor();
        $repartidor->nombre = $request->get('nombre');
        $repartidor->apellidos = $request->get('apellidos');
        $repartidor->login = $request->get('login');
        $repartidor->password = Hash::make($request->get('password'));
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


    public function edit($id)
    {
        $repartidor = repartidor::where('repartidor.id','=',$id)->get();
        return view('modules.repartidor.frmUpdate',[
            'repartidor'=>$repartidor
        ]);
    }

    public function update(Request $request, $id)
    {
        $repartidor = repartidor::findOrFail($id);
        $repartidor->nombre = $request->get('nombre');
        $repartidor->apellidos = $request->get('apellidos');
        $repartidor->login = $request->get('login');
        $repartidor->password =Hash::make( $request->get('password'));
        $repartidor->cedulaID = $request->get('cedulaID');
        $repartidor->telefono = $request->get('telefono');
        $repartidor->direccion = $request->get('direccion');
        $repartidor->update();
        return redirect('/repartidores')->with('info','el registro se ha guardado correctamente');
    }

    public function destroy($id)
    {
        $repartidor = repartidor::findOrFail($id);
        $repartidor->delete();

        return redirect('/repartidores')->with('danger','el registro se ha guardado correctamente');
    }
}
