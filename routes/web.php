<?php

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

use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('auth.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::post('/predict', [WebController::class, 'handleSubmit'])->name('handleSubmit');
    Route::get('/training-data', [WebController::class, 'training_data'])->name('training_data');

    Route::get('/logout', [AuthController::class, 'doLogout'])->name('auth.logout');
});