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
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('role');
Route::post('/comment/store',[App\Http\Controllers\CommentsController::class, 'store'])->name('storecomment');
Route::get('/home', [App\Http\Controllers\FilmsController::class, 'index'])->name('films');
Route::get('/film/{id}', [App\Http\Controllers\FilmsController::class, 'show'])->name('singlefilm');
Route::get('/admin', [App\Http\Controllers\FilmsController::class, 'admin'])->name('admin')->middleware('role');
Route::post('/admin/store', [App\Http\Controllers\FilmsController::class, 'store'])->name('store')->middleware('role');
Route::get('/adminfilms', [App\Http\Controllers\FilmsController::class, 'adminfilms'])->name('adminfilms')->middleware('role');
Route::get('delete/{id}', [App\Http\Controllers\FilmsController::class, 'destroy'])->name('delete')->middleware('role');
Route::get('edit/{id}', [App\Http\Controllers\FilmsController::class, 'edit'])->name('edit')->middleware('role');
Route::post('/update/{id}', [App\Http\Controllers\FilmsController::class, 'update'])->name('update')->middleware('role');







