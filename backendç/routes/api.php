<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostulantesController;
use App\Http\Controllers\ProfesorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('postulante')->group(function () {
    Route::get('/', [PostulantesController::class, 'index']);
    Route::get('/{id}',[ PostulantesController::class, 'show']);
    Route::post('/', [PostulantesController::class, 'storePostulante']);
    Route::put('/{id}',[ PostulantesController::class, 'update']);
    Route::delete('/{id}',[ PostulantesController::class, 'delete']);
    Route::get('/profesor', [ProfesorController::class, 'index']);
});
Route::prefix('profesor')->group(function () {
    Route::get('/', [ProfesorController::class, 'index']);
});