<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FuncionesController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [IndexController::class, 'index'])
->name('usuarios.index');

Route::get('/usuarios/peliculas', [IndexController::class, 'peliculas'])
->name('usuarios.peliculas');

Route::get('/usuarios/funciones', [IndexController::class, 'funciones'])
->name('usuarios.funciones');

Route::post('/usuarios', [IndexController::class, 'store'])
->name('peliculas.store');

Route::post('/usuarios', [FuncionesController::class, 'store'])
->name('funciones.store');

Route::get('/funciones', [FuncionesController::class, 'funciones']);


