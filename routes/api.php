<?php

use App\Http\Controllers\Api\Course\CourseController;
use App\Http\Controllers\Api\Helpers\FileController;
use App\Http\Controllers\Api\Product\ProductController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\Vimeo\VimeoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\JWTAuth;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/products/search/groupProt/{name}', [ProductController::class, 'search']);
});

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')
    ->post('/products', [ProductController::class, 'store'])
    ->name('productsStore');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{productId}', [ProductController::class, 'show']);
Route::post('/products/{productId}/update', [ProductController::class, 'update']);
Route::delete('/products/{productId}/delete', [ProductController::class, 'destroy']);
Route::post('/products/search/{name}', [ProductController::class, 'search']);

//Route::resource('products', ProductController::class);

/**
 * Auth
 */
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')
    ->post('/auth/test/logout', [AuthController::class, 'logout'])
    ->name('authLogout');


/**
 * User
 */
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{productId}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store'])->name("storeUser");
Route::post('/users/{productId}/update', [UserController::class, 'update']);
Route::delete('/users/{productId}/delete', [UserController::class, 'destroy']);
Route::post('/users/search/{name}', [UserController::class, 'search']);
//Route::resource('users', UserController::class);

/**
 * Course
 */
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{productId}', [CourseController::class, 'show']);
Route::post('/courses/search/{name}', [CourseController::class, 'search']);
Route::middleware('auth:sanctum')
    ->post('/courses', [CourseController::class, 'store']);
Route::middleware('auth:sanctum')
    ->post('/courses/{productId}/update', [CourseController::class, 'update']);
Route::middleware('auth:sanctum')
    ->delete('/courses/{productId}/delete', [CourseController::class, 'destroy']);
//Route::resource('courses', CourseController::class);

/**
 * Testing Laravel
 */

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/user/authLogin', [AuthController::class, 'login']);
Route::post('/user/login', [AuthController::class, 'login']);
//Route::post('/user/login', [AuthController::class, 'login']);

Route::middleware('jwt-auth')
    ->post('/user/jwt-auth', function(){
        return new JsonResponse(['success' => true], 200, ['application/json']);
    });

/**
 * VIMEO API
 */
Route::group(['prefix' => 'vimeo'], function (){
    Route::get('/upload', [VimeoController::class, 'create']);
    Route::post('/upload', [VimeoController::class, 'store'])
        ->name('video-upload.store');
});

/**
 * File API
 */
Route::post('/file', [FileController::class, 'file']);
