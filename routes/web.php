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

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home.index');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Route::get('/profile/view/{userId}', [App\Http\Controllers\ProfileController::class, 'view'])->name('profile.view');

Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');

Route::post('/profile/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

Route::get('/profile/{userId}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/profile/{userId}/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::delete('/profile/{userId}/delete', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');

Route::get('/account-setting', [App\Http\Controllers\AccountController::class, 'index'])->name('account-setting.index');

Route::post('/account-setting/update', [App\Http\Controllers\AccountController::class, 'update'])->name('account-setting.update');