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

Route::middleware('auth')->group(function () {

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/{user}/delete', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    Route::get('users/{user}/fetch', [\App\Http\Controllers\UserController::class, 'fetchUser'])->name('user.fetch');
    Route::post('users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::put('users/{user}/update', [\App\Http\Controllers\UserController::class, 'UpdateUser'])->name('user.update');
   
});
