<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;

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

Route::get('/', [ClienteController::class, 'index']);



Route::get('/saludar/{veces}', [ClienteController::class, 'saludar']);
Route::get('/despedida/{veces}', [ClienteController::class, 'despedida']);


Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::delete('/clientes/{id}', [ClienteController::class, 'borrar'])->name("clientes.borrar");
Route::view('/clientes/create', 'clientes.create')->name("clientes.create");
Route::post('/clientes/store', [ClienteController::class, 'store'])->name("clientes.store");
Route::get("/clientes/{id}/edit", [ClienteController::class, 'edit'])->name("clientes.edit");
Route::post("/clientes/{id}", [ClienteController::class, 'update'])->name("clientes.update");

Route::resource("proveedores", ProveedorController::class);
