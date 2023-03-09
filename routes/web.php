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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', [\App\Http\Controllers\FaqController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\FaqController::class, 'create']);
Route::post('/create', [\App\Http\Controllers\FaqController::class, 'store']);
