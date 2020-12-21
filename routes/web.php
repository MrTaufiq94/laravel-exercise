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
Route::get('/cars',[App\Http\Controllers\CarController::class, 'index'])->name('car:list');
Route::get('/cars/create',[App\Http\Controllers\CarController::class, 'create'])->name('car:create');
Route::post('/cars/create',[App\Http\Controllers\CarController::class, 'store'])->name('car:store');
Route::get('/cars/{car}',[App\Http\Controllers\CarController::class, 'show'])->name('car:show');
Route::get('/cars/{car}/edit',[App\Http\Controllers\CarController::class, 'edit'])->name('car:edit');
Route::post('/cars/{car}/edit',[App\Http\Controllers\CarController::class, 'update'])->name('car:update');
Route::get('/cars/{car}/delete',[App\Http\Controllers\CarController::class, 'delete'])->name('car:delete');

