<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PonenteController;
use App\Http\Controllers\AsistenteController;

/**
 * Rutas públicas
 */
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/{id}', [EventoController::class, 'show']);
Route::get('/ponentes', [PonenteController::class, 'index']);
Route::get('/ponentes/{id}', [PonenteController::class, 'show']);

/**
 * Rutas privadas
 */
Route::middleware('auth:api')->group(function () {
    Route::post('/eventos', [EventoController::class, 'store']);
    Route::put('/eventos/{evento}', [EventoController::class, 'update']);
    Route::delete('/eventos/{id}', [EventoController::class, 'destroy']);

    Route::post('/ponentes', [PonenteController::class, 'store']);
    Route::put('/ponentes/{ponente}', [PonenteController::class, 'update']);
    Route::delete('/ponentes/{id}', [PonenteController::class, 'destroy']);

    Route::get('/asistentes', [AsistenteController::class, 'index']);
    Route::post('/asistentes', [AsistenteController::class, 'store']);
    Route::get('/asistentes/{id}', [AsistenteController::class, 'show']);
    Route::put('/asistentes/{asistente}', [AsistenteController::class, 'update']);
    Route::delete('/asistentes/{id}', [AsistenteController::class, 'destroy']);
});