<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('contenido/contenido');
});

Route::get('categoria','ctrlCategoria@index');
Route::post('categoria/guardar','ctrlCategoria@store');
Route::put('categoria/actualizar','ctrlCategoria@update');
Route::put('categoria/eliminar','ctrlCategoria@delete');


//Route::get('/','ctrlRestaurante@welcome')->name('welcome.inicio');
/*
Route::get('restaurante','ctrlRestaurante@index')->name('restaurante.index');
Route::get('restaurante/create','ctrlRestaurante@create')->name('restaurante.create');
Route::post('restaurante/store','ctrlRestaurante@store')->name('restaurante.store');
Route::post('restaurante/update/{id}','ctrlRestaurante@update')->name('restaurante.update');
Route::post('restaurante/destroy/{id}','ctrlRestaurante@destroy')->name('restaurante.destroy');





Route::get('mesas','ctrlMesa@index')->name('mesa.index');
Route::post('mesas/store','ctrlMesa@store')->name('mesa.store');
Route::post('mesas/update/{id}','ctrlMesa@update')->name('mesa.update');
Route::post('mesas/ocupar/{id}','ctrlMesa@ocupar')->name('mesa.ocupar');
Route::post('mesas/desocupar/{id}','ctrlMesa@desocupar')->name('mesa.desocupar');
Route::post('mesas/destroy/{id}','ctrlMesa@destroy')->name('mesa.destroy');


Route::get('productos','ctrlProducto@index')->name('producto.index');
Route::get('productos/create','ctrlProducto@create')->name('producto.create');
Route::post('productos/store','ctrlProducto@store')->name('producto.store');
Route::get('productos/edit/{id}','ctrlProducto@edit')->name('producto.edit');
Route::post('productos/update/{id}','ctrlProducto@update')->name('producto.update');
Route::post('productos/destroy/{id}','ctrlProducto@destroy')->name('producto.destroy');



Route::get('clientes','ctrlCliente@index')->name('cliente.index');
Route::get('clientes/create','ctrlCliente@create')->name('cliente.create');
Route::post('clientes/store','ctrlCliente@store')->name('cliente.store');
Route::get('clientes/edit/{id}','ctrlCliente@edit')->name('cliente.edit');
Route::post('clientes/update/{id}','ctrlCliente@update')->name('cliente.update');
Route::post('clientes/destroy/{id}','ctrlCliente@destroy')->name('cliente.destroy');



Route::get('repartidores','ctrlRepartidor@index')->name('repartidor.index');
Route::get('repartidores/create','ctrlRepartidor@create')->name('repartidor.create');
Route::post('repartidores/store','ctrlRepartidor@store')->name('repartidor.store');
Route::get('repartidores/edit/{id}','ctrlRepartidor@edit')->name('repartidor.edit');
Route::post('repartidores/update/{id}','ctrlRepartidor@update')->name('repartidor.update');
Route::post('repartidores/destroy/{id}','ctrlRepartidor@destroy')->name('repartidor.destroy');


Route::get('menu','ctrlMenu@index')->name('menu.index');
Route::get('menu/create','ctrlMenu@create')->name('menu.create');

Route::get('vehiculos','ctrlvehiculo@index')->name('vehiculo.index');
Route::get('vehiculos/create','ctrlvehiculo@create')->name('vehiculo.create');
Route::post('vehiculos/store','ctrlvehiculo@store')->name('vehiculo.store');
Route::get('vehiculos/edit/{id}','ctrlvehiculo@edit')->name('vehiculo.edit');
Route::post('vehiculos/update/{id}','ctrlvehiculo@update')->name('vehiculo.update');
Route::post('vehiculos/destroy/{id}','ctrlvehiculo@destroy')->name('vehiculo.destroy');


Route::get('/tipoUsuarios','ctrlTipo@index')->name('tipo.index');




// Web





Route::get('reservas','ctrlReserva@index')->name('reserva.index');
Route::get('reservas/create','ctrlReserva@create')->name('reserva.create');
Route::post('reservas/store','ctrlReserva@store')->name('reserva.store');
Route::get('reservas/edit/{id}','ctrlReserva@edit')->name('reserva.edit');
Route::post('reservas/update/{id}','ctrlReserva@update')->name('reserva.update');
Route::post('reservas/destroy/{id}','ctrlReserva@destroy')->name('reserva.destroy');


*/