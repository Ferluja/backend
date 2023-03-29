<?php

use App\Http\Controllers\AltasBajasController;
use App\Http\Controllers\TiposCategoriasController;
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

Route::get('/',[AltasBajasController::class,'index'])->name('AltasBajas.index');
Route::get('/create',[TiposCategoriasController::class,'create'])->name('AltasBajas.create');
Route::post('/store',[AltasBajasController::class,'store'])->name('AltasBajas.store');
Route::get('/inicioAB',[AltasBajasController::class,'inicioAB'])->name('AltasBajas.inicioAB');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
