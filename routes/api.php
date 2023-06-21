<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Models\Alumni;
use App\Http\Controllers\AlumniController;

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


Route::get('/documents', [DocumentController::class, 'index']);
Route::post('/documents', [DocumentController::class, 'store']);
Route::get('/documents/{id}', [DocumentController::class, 'show']);


Route::get('/alumni/{id}', [AlumniController::class, 'getAlumniById']);
Route::get('/alumni', [AlumniController::class, 'getAllAlumni']);
Route::post('/alumni/tambahDataAlumni', [AlumniController::class, 'tambahDataAlumni']);
Route::delete('/alumni/deleteDataAlumni/{id}', [AlumniController::class, 'deleteDataAlumni']);