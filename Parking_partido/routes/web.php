<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorCoches;

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
    return view('inicio');
});

Route::post('/', [controladorCoches::class, 'store'])->name('anadir_coche');


Route::get('/', [controladorCoches::class, 'index'])->name('mostrar_coche');


Route::delete('/lista/{id}', [controladorCoches::class, 'delete'])->name('borrar_coche');


Route::get('/crear', [controladorCoches::class, 'crear_coches_formulario'])->name('Nuevo_coche');

Route::get('/', [controladorCoches::class, 'lista'])->name('Lista_coches');

Route::get('/buscador', [controladorCoches::class, 'buscador'])->name('Buscar_coche');







