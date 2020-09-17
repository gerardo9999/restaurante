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
Route::get('/producto/menuProducto', 'ctrlProducto@menuProducto');
// Route::get('/producto/buscarProducto', 'ctrlProducto@buscarProducto');



/////----------------Mesa-----------------///
Route::get('mesa','ctrlMesa@mostrar');
Route::post('mesa/guardar','ctrlMesa@guardar');
Route::post('mesa/modificar','ctrlMesa@modificar');
Route::post('mesa/libre','ctrlMesa@libre');
Route::post('mesa/ocupado','ctrlMesa@ocupado');
Route::post('mesa/eliminar','ctrlMesa@eliminar');



/////----------------Rol-----------------///
Route::get('rol','ctrlRol@rolUser');

/////----------------Menú-----------------///
Route::get('menu','ctrlMenu@mostrar');
Route::post('menu/guardar','ctrlMenu@guardar');

/////----------------Cliente-----------------///
Route::get('cliente','ctrlCliente@index');
Route::post('cliente/guardar','ctrlCliente@store');
Route::post('cliente/actualizar','ctrlCliente@update');
Route::post('cliente/activar','ctrlCliente@activar');
Route::post('cliente/desactivar','ctrlCliente@desactivar');
Route::post('cliente/eliminar','ctrlCliente@delete');
Route::get('/cliente/selectCliente','ctrlCliente@selectCliente'); 
Route::get('/cliente/dato','ctrlCliente@datoUser'); 

/////----------------Usuario-----------------///
Route::get('usuario','ctrlUsuario@index');
Route::post('usuario/guardar','ctrlUsuario@guardar');


/////---------------Orden---------------------------- ///////
Route::post('/ordenAtencion/guardar', 'ctrlOrdenAtencion@guardar');
Route::get('detalleOrden/buscar','ctrlOrdenAtencion@buscarDetalle');
Route::post('detalleOrden/modificar','ctrlOrdenAtencion@modificarDetalle');
Route::post('/finalizar/orden','ctrlOrdenAtencion@finalizarOrden');



Route::post('/item/eliminar','ctrlOrdenAtencion@itemEliminar');
Route::post('/item/actualizar','ctrlOrdenAtencion@itemActualizar');



//////------------------Detalle-----------------------------///////
Route::post('/agregar/producto/detalle','ctrlOrdenAtencion@agregarProductoDetalle');

// 




/////----------------Repartidor-----------------///
Route::get('repartidor','ctrlRepartidor@index');
Route::post('repartidor/guardar','ctrlRepartidor@store');
Route::post('repartidor/actualizar','ctrlRepartidor@update');
Route::post('repartidor/eliminar','ctrlRepartidor@delete');
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
