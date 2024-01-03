<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
| API Routes
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::get('/api_notificaciones', [NotificationController::class,'api_notificaciones'])->name
('api_notificaciones');
Route::get('/api_notificacion/{email}', [NotificationController::class,'api_notificacion'])->name('api_notificacion');
