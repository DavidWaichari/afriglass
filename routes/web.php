<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
Route::get('/contact', [App\Http\Controllers\AfriglassController::class, 'contact']);
Route::get('/projects/{slug}', [App\Http\Controllers\AfriglassController::class, 'projectDetails']);
Route::get('/services/{slug}', [App\Http\Controllers\AfriglassController::class, 'serviceDetails']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;
Route::resource('/admin/projects', ProjectController::class)->middleware('auth');
