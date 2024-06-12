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


Route::middleware('log.ip.address')->get('/', [App\Http\Controllers\LandingPageController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home.index');

Route::get('/profile/view/{userId}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');

Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');

Route::post('/profile/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');

Route::get('/profile/{userId}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/profile/{userId}/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::post('/profile/{userId}/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::delete('/profile/{userId}/delete', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

Route::delete('/profile/image/{profileId}/delete', [App\Http\Controllers\ProfileController::class, 'destroyImage'])->name('profile.destroyImage');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news.index');

Route::post('/news', [App\Http\Controllers\NewsController::class, 'store'])->name('news.store');

Route::post('/news/update-status', [App\Http\Controllers\NewsController::class, 'updateStatus'])->name('news.updateStatus');

Route::get('/logs', [App\Http\Controllers\LogController::class, 'index'])->name('logs.index');

Route::get('/account-setting', [App\Http\Controllers\AccountController::class, 'index'])->name('account-setting.index');

Route::post('/account-setting/{userId}/update-own-profile', [App\Http\Controllers\AccountController::class, 'updateOwnProfile'])->name('account-setting.updateOwnProfile');

Route::post('/account-setting/{userId}/update-user-profile', [App\Http\Controllers\AccountController::class, 'updateUserProfile'])->name('account-setting.updateUserProfile');