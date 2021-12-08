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



Route::get('/dessins', [\App\Http\Controllers\DessinsController::class, 'listUser'])->name('dessinsUser');

Route::get('/edit/{id}/',[\App\Http\Controllers\CreateController::class, 'editUser'])->name('editUser'); // edit user

Route::post('/submitUser', [\App\Http\Controllers\DessinsUserController::class, 'store'])->name("store-draw-requestUser"); // submit user







Route::get('/create', [\App\Http\Controllers\CreateController::class, 'index'])->middleware(['trusted.login'])->name('create');


Route::get('/dashboard/edit/{id}/',[\App\Http\Controllers\CreateController::class, 'edit'])->name('edit');

Route::get('/delete/{id}/',[\App\Http\Controllers\CreateController::class, 'delete'])->name('delete');

Route::post('/submit', [\App\Http\Controllers\CreateController::class, 'store'])->name("store-draw-request");





require __DIR__.'/auth.php';
