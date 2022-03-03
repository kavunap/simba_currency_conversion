<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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

Route::get('/home', function () {
    return view('home');
});

// Auth::routes();

Route::get('/', [App\Http\Controllers\TransactionController::class, 'index'])->name('home')->middleware('auth');
Route::resource('transactions', TransactionController::class)->middleware('auth');
Route::get('/sort',[App\Http\Controllers\TransactionController::class, 'sort'])->name('Sort_by_expiration_date')->middleware('auth');