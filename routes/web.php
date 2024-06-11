<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeseroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Ruta principal para el login

Route::get('/', function () {
    return view('auth.login');
});


// Rutas para meseros
Route::get('/atencion_clientes', [MeseroController::class, 'index'])->name('atencion_clientes');
Route::get('/atencion_clientes/menu', [MeseroController::class, 'menu'])->name('menu_atencion_clientes');
Route::get('/atencion_clientes/menu/{eleccion}', [MeseroController::class, 'menu_detalle'])->name('menu_detalles_atencion_clientes');

Route::get('/atencion_clientes/mesas', [MeseroController::class, 'mesas'])->name('mesas_atencion_clientes');
Route::get('/atencion_clientes/mesas/detalle', [MeseroController::class, 'mesas_detalle'])->name('mesas_atencion_clientes_detalle');

Route::get('/atencion_clientes/pedidos', [MeseroController::class, 'pedidos'])->name('pedidos_atencion_clientes');



Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

