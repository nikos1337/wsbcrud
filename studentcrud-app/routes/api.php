<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Pipikas/50358/people', [\App\Http\Controllers\StudentController::class, 'index']);
Route::post('Pipikas/50358/people', [\App\Http\Controllers\StudentController::class, 'store']);
Route::get('Pipikas/50358/people/{id}', [\App\Http\Controllers\StudentController::class, 'show']);
Route::put('Pipikas/50358/people/{id}/edit', [\App\Http\Controllers\StudentController::class, 'update']);
Route::delete('Pipikas/50358/people/{id}/destroy', [\App\Http\Controllers\StudentController::class, 'destroy']);
