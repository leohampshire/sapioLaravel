<?php

use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\login\EntrarController;
use App\Http\Controllers\login\RegistroControler;
use App\Http\Controllers\mail\MailController as MailControllerAlias;
use App\Http\Controllers\mail\OrderShipmentController as OrderShipmentControllerAlias;
use App\Http\Controllers\Series\EpisodiosController;
use App\Http\Controllers\Series\SeriesController;
use App\Http\Controllers\Series\TemporadasController;
use App\Http\Controllers\User\Library\UserLibraryController;
use App\Mail\NovaSerie;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

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

Route::get('/visualizando-email', function (){
    $nome = 'Leonardo';
    return new NovaSerie('Leonardo');
});

Route::get('/enviar-email', [OrderShipmentControllerAlias::class, 'store'])
    ->name('emails.orders.shipped');

Route::get('/mailable', function () {
    $invoice = App\Models\Invoice::find(1);

    return new App\Mail\InvoicePaid($invoice);
});

/*
 * Routes: Course
 */
Route::get('/courses/index', [CourseController::class, 'index'])
    ->name('courses.index')
    //->middleware('auth')
;
Route::get('/courses/create-course', [courseController::class, 'create'])
    ->name("courses.create");
Route::post('/courses/criar-course', [courseController::class, 'store'])
    ->name('courses.store');
Route::delete('/courses/{id}', [courseController::class, 'destroy'])
    ->name('courses.destroy');
Route::post('/courses/{id}/editaNome', [courseController::class, 'editaNome'])
    ->name('courses.editaNome');

/*
 * Routes: Library
 */
Route::get('/user-libraries/index', [UserLibraryController::class, 'index'])
    ->name('user-libraries.index')
    //->middleware('auth')
;
Route::get('/user-libraries/create-library', [UserLibraryController::class, 'create'])
    ->name("user-libraries.create");
Route::post('/user-libraries/criar-library', [UserLibraryController::class, 'store'])
    ->name('user-libraries.store');
Route::delete('/user-libraries/{id}', [UserLibraryController::class, 'destroy'])
    ->name('user-libraries.destroy');
Route::post('/user-libraries/{id}/editaNome', [UserLibraryController::class, 'editaNome'])
    ->name('user-libraries.editaNome');

/*
 * Routes: Home
 */
/*Route::middleware(['auth:sanctum', 'verified'])
    ->get('/', [HomeController::class, 'index'])
    ->name('home.index');*/

Route::get('/', [HomeController::class, 'index']);


