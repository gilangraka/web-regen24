<?php

use App\Http\Controllers\PanitiaController;
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

Route::group(["middleware" => "auth"], function () {
    Route::get('/users', [PanitiaController::class, "tampilUser"]);
    Route::get('/users/sudah_memilih', [PanitiaController::class, "tampilUserSudah"]);
    Route::get('/users/belum_memilih', [PanitiaController::class, "tampilUserBelum"]);
});
Route::get('/updateChart', [PanitiaController::class, "updateChart"]);
