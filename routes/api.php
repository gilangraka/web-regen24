<?php

use App\Http\Controllers\ApiController;
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
    Route::get('/users', [ApiController::class, "getUserAll"]);
    Route::get('/users/sudah_memilih', [ApiController::class, "getUserSudah"]);
    Route::get('/users/belum_memilih', [ApiController::class, "getUserBelum"]);
    Route::get('/updateChart', [ApiController::class, "updateChart"]);
    Route::get('/camin', [ApiController::class, "getCaminAll"]);
    Route::get('/camin/{id}', [ApiController::class, "getCaminByID"]);
    Route::get('/get_vote', [ApiController::class, "getStatusVote"]);
    Route::get('/set_vote', [ApiController::class, "setStatusVote"]);
});
