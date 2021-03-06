<?php

use Illuminate\Support\Facades\Route;
use App\Cliente;
use App\Localidad;

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
    return view('auth.login');
});

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('clientes/clientes', 'ClienteController');

Route::resource('localidad/localidad', 'LocalidadController')->middleware('auth');





// Route::resource('proveedors/proveedors', 'ProveedorController');
