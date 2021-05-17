<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/', [\App\Http\Controllers\FormsController::class, 'ContactUsForm'])->name('contact.store');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('auth');

Route::get('/admin/{id}', [App\Http\Controllers\FormsController::class,'delete'])->name('contact.delete');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

