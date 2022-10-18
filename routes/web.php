<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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
    return "<h1>Que bonito es Laravel 9</h1>";
});

Route::get('/saludar/{veces}', [ClienteController::class, 'saludar']);
Route::get('/despedida/{veces}', [ClienteController::class, 'despedida']);



Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/borrar/{id}', [ClienteController::class, 'borrar']);