<?php

use App\Http\Controllers\AltasBajas;
use App\Http\Controllers\Inicio;
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

Route::get('/',[Inicio::class,'index'])->name('inicio');
Route::get('/altasBajas',[AltasBajas::class,'index'])->name('altasBajas');
Route::get('/create',[AltasBajas::class,'create'])->name('create');
Route::post('/store',[AltasBajas::class,'store'])->name('store');


