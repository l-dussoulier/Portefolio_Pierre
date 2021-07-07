<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['trusted.administrator'])->name('dashboard');

Route::get('/dashboard/dessins', [\App\Http\Controllers\DessinsController::class, 'list'])->name('dessins');


Route::get('/dashboard/create',[\App\Http\Controllers\CreateController::class, 'index'])->name('create');
Route::get('/dashboard/edit/{id}/',[\App\Http\Controllers\CreateController::class, 'edit'])->name('edit');

Route::post('/submit', [\App\Http\Controllers\CreateController::class, 'store'])->name("store-draw-request");



require __DIR__.'/auth.php';
