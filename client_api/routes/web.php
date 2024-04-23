<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientesController;

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

Route::get('/', [ClientesController::class,'index'])->name('cliente.index');
Route::get('/cliente', [ClientesController::class,'create'])->name('cliente.create');
Route::post('/store',[ClientesController::class,'store'])->name('cliente.store');
Route::get('/cliente/{idCliente}', [ClientesController::class,'view'])->name('cliente.view');
Route::post('/cliente/update', [ClientesController::class,'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}', [ClientesController::class,'delete'])->name('cliente.delete');