<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassRecordController;
use App\Http\Controllers\ScoreController;
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

Route::get('/', [ClassRecordController::class, 'index'])->name('home');

Route::post('/create-activity', [ActivityController::class, 'store'])->name('activity.store');

Route::post('/submit-scores', [ScoreController::class, 'store'])->name('score.store');