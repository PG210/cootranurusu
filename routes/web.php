<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuAdmin;
use App\Http\Controllers\Informacion;

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


Route::get('/admin', function () {
    return view('admin.vistaprincipal');
})->middleware(['auth'])->middleware(['admin'])->name('prin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('cootranur/informacion/mision-vision', [Informacion::class, 'mision'])->name('mis');

require __DIR__.'/auth.php';
