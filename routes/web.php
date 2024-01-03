<?php
use App\Http\Controllers\ReceiverController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NotificationController;
/*
| Web Routes
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories',CategoryController::class)->middleware('auth');
Route::resource('receivers',ReceiverController::class)->middleware('auth');
Route::resource('notifications',NotificationController::class)->middleware('auth');
