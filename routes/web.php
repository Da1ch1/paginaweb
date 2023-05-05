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
Route::get('/Contabilidad', [SieController::class, 'servicios'])->name('servicios.contabilidad');
Route::get('/Capacitacion', [SieController::class, 'servicios2'])->name('servicios.capacitacion');
Route::get('/Soporte', [SieController::class, 'servicios3'])->name('servicios.soporte');
Route::get('/Programacion', [SieController::class, 'servicios4'])->name('servicios.programacion');
Route::get('/Diseño y Marketing', [SieController::class, 'servicios5'])->name('servicios.diseñoymarketing');
Route::get('/Talleres', [SieController::class, 'servicios6'])->name('servicios.talleres');
Route::get('/Contpaqi', [SieController::class, 'contpaq'])->name('servicios.contpaqi');
Route::get('/Aspel', [SieController::class, 'aspel'])->name('servicios.aspel');

