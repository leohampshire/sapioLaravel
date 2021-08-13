<?php

use App\Http\Controllers\login\EntrarController;
use App\Http\Controllers\login\RegistroControler;
use App\Http\Controllers\Series\EpisodiosController;
use App\Http\Controllers\Series\SeriesController;
use App\Http\Controllers\Series\TemporadasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*
 * Routes: Series
 */
Route::get('/series/index', [SeriesController::class, 'index'])
    ->name('series.index')
    //->middleware('auth')
;
Route::get('/series/criar-serie', [SeriesController::class, 'create'])
    ->name("series.create");
Route::post('/series/criar-serie', [SeriesController::class, 'store'])
    ->name('series.store');
Route::delete('/series/{id}', [SeriesController::class, 'destroy'])
    ->name('series.destroy');
Route::post('/series/{id}/editaNome', [SeriesController::class, 'editaNome'])
    ->name('series.editaNome');
Route::get('/series/{serieId}/temporadas', [TemporadasController::class, 'index'])
    ->name('temporadas.index');

/*
 * Routes: Temporadas
 */
Route::get('/temporadas/{temporada}/episodios', [EpisodiosController::class, 'index'])
    ->name('episodios.index');
Route::post('/temporadas/{temporada}/episodios/assistidos', [EpisodiosController::class, 'setAssistidos'])
    ->name('episodios.setAssistidos');

/*
 * Routes: Login/logout
 */

Route::get('/entrar', [EntrarController::class, 'index'])
    ->name('entrar.index');
Route::post('/entrar', [EntrarController::class, 'entrar'])
    ->name('entrar.indexPost');
Route::get('/registro', [RegistroControler::class, 'create'])
    ->name('registro.create');
Route::post('/registro', [RegistroControler::class, 'store'])
    ->name('registro.store');
Route::get('/sair', function () {
    Auth::logout();
    return redirect()->route('entrar.index');
})
    ->name('sair');
