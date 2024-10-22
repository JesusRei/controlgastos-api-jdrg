<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\LoginController;

// Rutas para el controlador GastoController
Route::apiResource('gastos', GastoController::class)
    ->middleware('auth:sanctum'); // Protege las rutas con autenticación

// Rutas para el controlador LoginController
Route::post('/login', [LoginController::class, 'login']);
