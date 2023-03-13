<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SieController;
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
//Ruta inicial
Route::get('/', function () {
    return view('sieweb.navbar');
});
//Resto de las rutas de la pagina web
Route::get('terminos y condiciones', [SieController::class, 'term'])->name('sieweb.terminos');
Route::get('/', [SieController::class, 'inicio'])->name('inicio');