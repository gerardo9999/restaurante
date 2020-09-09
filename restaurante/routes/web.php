<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('contenido/contenido');
});



//----------CATEGORIA-------------////
Route::get('categoria','ctrlCategoria@index');
Route::post('categoria/guardar','ctrlCategoria@store');
Route::put('categoria/actualizar','ctrlCategoria@update');
Route::put('categoria/eliminar','ctrlCategoria@delete');
Route::get('/categoria/selectCategoria', 'ctrlCategoria@selectCategoria');


/////----------------Producto-----------------///
Route::get('producto','ctrlProducto@mostrar');
Route::post('producto/guardar','ctrlProducto@guardar');
Route::post('producto/modificar','ctrlProducto@modificar');
Route::post('producto/eliminar','ctrlProducto@eliminar');
Route::get('producto/buscarProducto','ctrlProducto@buscarProducto');
Route::get('/producto/menu','ctrlProducto@productoMenu');
Route::get('/producto/selectProducto', 'ctrlProducto@selectProducto');
// Route::get('/producto/buscarProducto', 'ctrlProducto@buscarProducto');


/////----------------Mesa-----------------///
Route::get('mesa','ctrlMesa@mostrar');
Route::post('mesa/guardar','ctrlMesa@guardar');
Route::post('mesa/modificar','ctrlMesa@modificar');
Route::post('mesa/eliminar','ctrlMesa@eliminar');


Route::get('menu','ctrlMenu@mostrar');
Route::post('menu/guardar','ctrlMenu@guardar');

/////----------------Cliente-----------------///
Route::get('cliente','ctrlCliente@index');
Route::post('cliente/guardar','ctrlCliente@store');
Route::put('cliente/actualizar','ctrlCliente@update');
Route::put('cliente/eliminar','ctrlCliente@delete');
Route::get('/cliente/selectCliente','ctrlCliente@selectCliente'); 



Route::post('/ordenAtencion/guardar', 'ctrlOrdenAtencion@guardar');
Route::get('detalleOrden/buscar','ctrlOrdenAtencion@buscarDetalle');
Route::post('detalleOrden/modificar','ctrlOrdenAtencion@modificarDetalle');



/////----------------Repartidor-----------------///
Route::get('repartidor','ctrlRepartidor@index');
Route::post('repartidor/guardar','ctrlRepartidor@store');
Route::put('repartidor/actualizar','ctrlRepartidor@update');
Route::put('repartidor/eliminar','ctrlRepartidor@delete');
Route::get('/repartidor/selectRepartidor', 'ctrlRepartidor@selectRepartidor');




/////----------------Tipo-----------------///
Route::get('tipo','ctrlTipo@index');
Route::post('tipo/guardar','ctrlTipo@store');
Route::put('tipo/actualizar','ctrlTipo@update');
Route::put('tipo/eliminar','ctrlTipo@delete');

/////----------------Vehiculo-----------------///
Route::get('vehiculo','ctrlVehiculo@mostrar');
Route::post('vehiculo/guardar','ctrlVehiculo@guardar');
Route::post('vehiculo/modificar','ctrlVehiculo@modificar');
Route::post('vehiculo/eliminar','ctrlVehiculo@eliminar');

//------------------reserva----------------//
Route::get('reserva','ctrlReserva@mostrar');
Route::post('reserva/guardar','ctrlReserva@guardar');
Route::post('reserva/modificar','ctrlReserva@modificar');
Route::post('reserva/eliminar','ctrlReserva@eliminar');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
