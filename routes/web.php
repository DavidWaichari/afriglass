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

Route::get('/', [App\Http\Controllers\AfriglassController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AfriglassController::class, 'about']);
Route::get('/projects', [App\Http\Controllers\AfriglassController::class, 'projects']);
Route::get('/projects/{slug}', [App\Http\Controllers\AfriglassController::class, 'projectDetails']);
Route::get('/services/{slug}', [App\Http\Controllers\AfriglassController::class, 'serviceDetails']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
