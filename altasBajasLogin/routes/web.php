<?php

use App\Http\Controllers\AltasBajasController;
use App\Http\Controllers\AuthController;
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

Route::get('/',[AuthController::class,'index'])->name('login');
Route::get('/register',[AuthController::class,'registrar'])->name('registrar');
Route::post('logear',[AuthController::class, 'logear'])->name('logear');
Route::get('/user',[AltasBajasController::class,'index'])->name('AltasBajas.index');
Route::post('/nuevoUsuario', [AuthController::class, 'agregarNuevo'])->name('agregarNuevo');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/create',[TiposCategoriasController::class,'create'])->name('AltasBajas.create');
Route::post('/store',[AltasBajasController::class,'store'])->name('AltasBajas.store');
Route::get('/inicioAB',[AltasBajasController::class,'inicioAB'])->name('AltasBajas.inicioAB');






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
