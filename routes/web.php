<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\NoticiaController; 





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





/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 */

/* Auth::routes(); */
Auth::routes(['register' => false]);

/* require __DIR__.'/auth.php';    */ 

Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/logout', [App\Http\Controllers\LogoutController::class ,'perform'])->name('logout.perform');
 });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/personeriaJuridica', [App\Http\Controllers\PersoneriaController::class, 'index'])->name('personeria');
Route::get('/estatutoReglamentos', [App\Http\Controllers\EstatutoController::class, 'index'])->name('estatuto');
Route::get('/directorioEjecutivo', [App\Http\Controllers\directorioController::class, 'index'])->name('directorio');
Route::get('/requisitosInscripcion', [App\Http\Controllers\RequisitosInscripcionController::class, 'index'])->name('inscripcion');

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/convenios/create', [App\Http\Controllers\ConvenioController::class, 'create'])->name('servicios.createConvenios');
        Route::post('/convenios', [App\Http\Controllers\ConvenioController::class, 'store'])->name('servicios.store');


        Route::get('/cursos/create', [App\Http\Controllers\CursosController::class, 'create'])->name('cursos.create');
        Route::post('/cursos', [App\Http\Controllers\CursosController::class, 'store'])->name('cursos.store');
        Route::get('/cursos/{curso}/edit', [App\Http\Controllers\CursosController::class, 'edit'])->name('cursos.edit');
        Route::put('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'update'])->name('cursos.update');
        Route::delete('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'destroy'])->name('cursos.destroy');


        Route::get('/fotos/create', [App\Http\Controllers\FotosController::class, 'create'])->name('fotos.create');
        Route::post('/fotos', [App\Http\Controllers\FotosController::class, 'store'])->name('fotos.store');
    });

Route::get('/fotos', [App\Http\Controllers\FotosController::class, 'index'])->name('fotos.index');
Route::get('/fotos/{foto}', [App\Http\Controllers\FotosController::class, 'show'])->name('fotos.show');

Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index'])->name('cursos.index');
Route::get('/cursos/{curso}', [App\Http\Controllers\CursosController::class, 'show'])->name('cursos.show');




/* Route::resource('/fotos', FotosController::class);
Route::resource('/cursos', CursosController::class);

    Route::resource('/noticias', NoticiaController::class);
*/

Route::get('/tribunalEtica', [App\Http\Controllers\TribunalEticaController::class, 'index'])->name('tribunal');
Route::get('/consejoTecnico', [App\Http\Controllers\ConsejoTecnicoController::class, 'index'])->name('consejo');
Route::get('/historia', [App\Http\Controllers\HistoriaController::class, 'index'])->name('historia');
Route::get('/directoriaADA', [App\Http\Controllers\DirectorioAdaController::class, 'index'])->name('directoriaADA');
Route::get('/convenios', [App\Http\Controllers\ConvenioController::class, 'index'])->name('convenios');



Route::get('/biblioteca1', function () {
    return view('servicios.digital1');
});

Route::get('/clubes', function () {
    return view('deportesADA.clubes');
});

Route::get('/clubActivos', function () {
    return view('deportesADA.clubes.Activos');
});
Route::get('/clubAudimilenium', function () {
    return view('deportesADA.clubes.Audimilenium');
});
Route::get('/clubBimonetarios', function () {
    return view('deportesADA.clubes.Bimonetarios');
});
Route::get('/clubCGR', function () {
    return view('deportesADA.clubes.CGR');
});
Route::get('/clubEfetivos', function () {
    return view('deportesADA.clubes.Efetivos');
});
Route::get('/clubExigibles', function () {
    return view('deportesADA.clubes.Exigibles');
});
Route::get('/clubMaster', function () {
    return view('deportesADA.clubes.Master');
});
Route::get('/clubSeniorClub', function () {
    return view('deportesADA.clubes.SeniorClub');
});
Route::get('/clubValorFuturo', function () {
    return view('deportesADA.clubes.ValorFuturo');
});


Route::get('/normas', function () {
    return view('normativaLegal.normas.index');
});
Route::get('/normasAuditoria', function () {
    return view('normativaLegal.normas.normasA');
});
Route::get('/normasContabilidad', function () {
    return view('normativaLegal.normas.normasC');
});

Route::get('/normasContabilidad/NormasdeContabilidadBidFomin', function () {
    return view('normativaLegal.normas.normasConta.NormasdeContabilidadBidFomin');
});