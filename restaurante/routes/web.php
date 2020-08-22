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
    return view('principal.index');
});


Route::get('categorias','ctrlCategoria@index')->name('categoria.index');
Route::post('categorias/store','ctrlCategoria@store')->name('categoria.store');
Route::post('categorias/update/{id}','ctrlCategoria@update')->name('categoria.update');
Route::post('categorias/destroy/{id}','ctrlCategoria@destroy')->name('categoria.destroy');


Route::get('mesas','ctrlMesa@index')->name('mesa.index');
Route::post('mesas/store','ctrlMesa@store')->name('mesa.store');
Route::post('mesas/update/{id}','ctrlMesa@update')->name('mesa.update');
Route::post('mesas/destroy/{id}','ctrlMesa@destroy')->name('mesa.destroy');


Route::get('productos','ctrlProducto@index')->name('producto.index');
Route::get('productos/create','ctrlProducto@create')->name('producto.create');
Route::post('productos/store','ctrlProducto@store')->name('producto.store');
Route::get('productos/edit/{id}','ctrlProducto@edit')->name('producto.edit');
Route::post('productos/update/{id}','ctrlProducto@update')->name('producto.update');
Route::post('productos/destroy/{id}','ctrlProducto@destroy')->name('producto.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
