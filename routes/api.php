<?php

use App\Http\Controllers\Api\BasuraController;
use App\Http\Controllers\Api\UsuarioBebidaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// use App\Http\Controllers\Api\UsuarioBebidaController;
Route::get('trash', [BasuraController::class, 'index']);

Route::get('tilin', [UsuarioBebidaController::class, 'waza']);

Route::post('usuario-bebida', [UsuarioBebidaController::class, 'store']);
