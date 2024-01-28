<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership.index');

Route::get('/membership/profile', [App\Http\Controllers\MembershipController::class, 'profile'])->name('membership.profile');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');