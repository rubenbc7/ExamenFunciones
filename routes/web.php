<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesController;
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
    return "Funciones de cine";
});

Route::get('/funciones', 
            'funcionesController@index') ->
                name('funciones.index');
Route::get('/funciones/create', 
            'funcionesController@create')->
                name('funciones.create');
Route::post('/funciones/store',
            'funcionesController@store')->
                name('funciones.store');
Route::delete('/funciones/{id}', 'funcionesController@destroy')->name('funciones.destroy');



//Route::get('/', 'FuncionesController@index')->name('funciones.index');
