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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/user',App\Http\Controllers\UserController::class);
// Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('index');
// Route::post('/{user}', [App\Http\Controllers\UserController::class, 'store'])->name('store');
// Route::get('/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
// Route::put('/user', [App\Http\Controllers\UserController::class, 'update'])->name('update');
