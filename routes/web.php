<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\FotosController;


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

Route::get('/biblioteca1', function () {
    return view('servicios.digital1');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 */
require __DIR__.'/auth.php';    
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/personeriaJuridica', [App\Http\Controllers\PersoneriaController::class, 'index'])->name('personeria');
Route::get('/estatutoReglamentos', [App\Http\Controllers\EstatutoController::class, 'index'])->name('estatuto');
Route::get('/directorioEjecutivo', [App\Http\Controllers\directorioController::class, 'index'])->name('directorio');
Route::get('/requisitosInscripcion', [App\Http\Controllers\RequisitosInscripcionController::class, 'index'])->name('inscripcion');


Route::resource('/cursos', CursosController::class); 
/* Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index'])->name('cursos.index');
Route::get('/cursos/create', [App\Http\Controllers\CursosController::class, 'create'])->name('cursos.create');
Route::post('/cursos', [App\Http\Controllers\CursosController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'show'])->name('cursos.show');
Route::get('/cursos/{curso}/edit', [App\Http\Controllers\CursosController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'destroy'])->name('cursos.destroy');
 */

Route::resource('/fotos', FotosController::class);


Route::get('/tribunalEtica', [App\Http\Controllers\TribunalEticaController::class, 'index'])->name('tribunal');
Route::get('/consejoTecnico', [App\Http\Controllers\ConsejoTecnicoController::class, 'index'])->name('consejo');
Route::get('/historia', [App\Http\Controllers\HistoriaController::class, 'index'])->name('historia');
Route::get('/directoriaADA', [App\Http\Controllers\DirectorioAdaController::class, 'index'])->name('directoriaADA');
Route::get('/convenios', [App\Http\Controllers\ConvenioController::class, 'index'])->name('convenios');
Route::get('/convenios/create', [App\Http\Controllers\ConvenioController::class, 'create'])->name('servicios.createConvenios');
Route::post('/convenios', [App\Http\Controllers\ConvenioController::class, 'store'])->name('servicios.store');

/* Route::get('/fotos', [App\Http\Controllers\FotosController::class, 'index'])->name('fotos.index');
Route::get('/fotos/create', [App\Http\Controllers\FotosController::class, 'create'])->name('fotos.create');
Route::post('/fotos', [App\Http\Controllers\FotosController::class, 'store'])->name('fotos.store');
Route::get('/fotos/{foto}', [App\Http\Controllers\FotosController::class, 'show'])->name('fotos.show'); */




