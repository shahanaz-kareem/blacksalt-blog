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

Route::get('ConditionsPolicy', [App\Http\Controllers\FrontController::class, 'ConditionsPolicy'])->name('ConditionsPolicy');
Route::post('store', [App\Http\Controllers\FrontController::class, 'store'])->name('store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('profile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('users/{id}', [App\Http\Controllers\HomeController::class, 'destory'])->name('users.destroy');
Route::post('EditProdile', [App\Http\Controllers\HomeController::class, 'EditProdile'])->name('EditProdile');