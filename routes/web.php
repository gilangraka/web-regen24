<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PanitiaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index']);

Route::group(["middleware" => "guest"], function () {
    Route::get('/login', [PageController::class, 'loginPage'])->name('login')->middleware('disable_back');
});
Route::group(["middleware" => "auth"], function () {
    Route::get('/dashboard', [PageController::class, 'dashboardPage'])->name('dashboard')->middleware('disable_back');
    Route::get('/dashboard/view_user', [PageController::class, 'viewUserPage']);
    Route::get('/dashboard/view_camin', [PageController::class, 'viewCaminPage']);
});

Route::post('/tambah_user', [PanitiaController::class, 'tambahUser']);
Route::post('/import_user', [PanitiaController::class, 'importUser']);
Route::get('/export_user', [PanitiaController::class, 'exportUser']);
Route::post('/loginAction', [AuthController::class, 'loginAction']);
Route::post('/logoutAction', [AuthController::class, 'logoutAction']);
