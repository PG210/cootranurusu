<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuAdmin;
use App\Http\Controllers\Informacion;
use App\Http\Controllers\Archivo;
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

Route::get('/admin', [UsuAdmin::class, 'vistaprin'])->middleware(['auth'])->middleware(['admin'])->name('prin');


Route::post('cootranur/registrar/archivo', [Archivo::class, 'carga'])->middleware(['admin'])->name('registrar');
Route::get('cootranur/descarga/archivo/{file}', [Archivo::class, 'descarga'])->name('descargas');

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [UsuAdmin::class, 'principal'])->middleware(['auth'])->name('dashboard');

Route::get('cootranur/informacion/mision-vision', [Informacion::class, 'mision'])->name('mis');

Route::get('cootranur/informacion/borrar/{id}', [UsuAdmin::class, 'borrar'])->middleware(['admin'])->name('eliminar');

require __DIR__.'/auth.php';
