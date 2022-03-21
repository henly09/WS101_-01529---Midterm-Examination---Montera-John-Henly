<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\atmcontroller;


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

Route::get('/', [atmcontroller::class, 'login'])->name('login'); // login
Route::get('/signup', [atmcontroller::class, 'signup'])->name('signup'); //signup page 
Route::get('/transaction', [atmcontroller::class, 'transaction'])->name('transaction'); //transaction
Route::get('/dashboard', [atmcontroller::class, 'dashboard'])->name('dashboard'); //dashboard

Route::get('/log', [atmcontroller::class, 'loginvalidation'])->name('loginvalidation'); // login validation
Route::get('/createuser', [atmcontroller::class, 'signupvalidation'])->name('signupvalidation'); // signup validation
Route::get('/withdraw', [atmcontroller::class, 'withdraw'])->name('withdraw'); // withdraw validation
Route::get('/deposit', [atmcontroller::class, 'deposit'])->name('deposit'); // deposit validation















