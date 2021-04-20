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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::post('/{slug}/tasks',['as' => 'tasks.ajax','uses' =>'ProjectController@ajax_tasks'])->middleware(['auth','XSS']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('truehome')->middleware(['auth']);
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('user-update')->middleware(['auth']);
Route::put('/update/{id}', [App\Http\Controllers\HomeController::class, 'save'])->name('user-save')->middleware(['auth']);
Route::delete('/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('user-delete')->middleware(['auth']);
Route::get('/createUserPage', [App\Http\Controllers\HomeController::class, 'createUserPage'])->name('user-create-page')->middleware(['auth']);
Route::post('/createUser', [App\Http\Controllers\HomeController::class, 'create'])->name('user-create')->middleware(['auth']);
