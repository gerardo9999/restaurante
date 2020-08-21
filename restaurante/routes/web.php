<?php

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
    return view('welcome');
});


Route::get('categorias','ctrlCategoria@index')->name('categoria.index');
Route::post('categorias/store','ctrlCategoria@store')->name('categoria.store');
Route::post('categorias/update/{id}','ctrlCategoria@update')->name('categoria.update');
Route::post('categorias/destroy/{id}','ctrlCategoria@destroy')->name('categoria.destroy');


Route::get('mesas','ctrlMesa@index')->name('mesa.index');
Route::post('mesas/store','ctrlMesa@store')->name('mesa.store');
Route::post('mesas/update/{id}','ctrlMesa@update')->name('mesa.update');
Route::post('mesas/destroy/{id}','ctrlMesa@destroy')->name('mesa.destroy');
