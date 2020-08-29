<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctrlUbicacion extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
if (isset($_POST['boton']) && $_POST['boton']=="GUARDAR") {
	
	set_ubicacion();
}

function set_ubicacion(){
	$longitud=$_POST['txtLongitud'];
	$latitud=$_POST['txtLatitud'];
	$referencia=$_POST['txtRefencia'];
	
	$obj=new clsUbicacion();
		if ($obj->set_ubicacion($longitud,$latitud,$referencia)) {
		echo "<script> alert('SE REGISTRO CON EXITO'); </script>";	
		}
		else {
		echo "<script> alert('ERROR'); </script>";	
		}


}

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
