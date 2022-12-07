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


Route::get('/', [App\Http\Controllers\FrontController::class, 'mainhome'])->name('/');
Route::get('about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('service', [App\Http\Controllers\FrontController::class, 'service'])->name('service');
Route::get('contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');