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
    return view('landing-page/index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership.index');

Route::get('/membership/profile', [App\Http\Controllers\MembershipController::class, 'profile'])->name('membership.profile');

Route::get('/membership/create', [App\Http\Controllers\MembershipController::class, 'create'])->name('membership.create');

Route::get('/membership/edit', [App\Http\Controllers\MembershipController::class, 'edit'])->name('membership.edit');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');

Route::get('/account-setting', [App\Http\Controllers\AccountController::class, 'index'])->name('account-setting.index');