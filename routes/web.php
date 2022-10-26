<?php

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

/* Route::get('/', function () {return view('welcome');})->name('welcome'); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/personeriaJuridica', [App\Http\Controllers\PersoneriaController::class, 'index'])->name('personeria');
Route::get('/estatutoReglamentos', [App\Http\Controllers\EstatutoController::class, 'index'])->name('estatuto');
Route::get('/directorioEjecutivo', [App\Http\Controllers\directorioController::class, 'index'])->name('directorio');
Route::get('/requisitosInscripcion', [App\Http\Controllers\RequisitosInscripcionController::class, 'index'])->name('inscripcion');

Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [App\Http\Controllers\CursosController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [App\Http\Controllers\CursosController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'show'])->name('cursos.show');


Route::get('/tribunalEtica', [App\Http\Controllers\TribunalEticaController::class, 'index'])->name('tribunal');
Route::get('/consejoTecnico', [App\Http\Controllers\ConsejoTecnicoController::class, 'index'])->name('consejo');
Route::get('/historia', [App\Http\Controllers\HistoriaController::class, 'index'])->name('historia');


