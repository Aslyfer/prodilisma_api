<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Importar controladores
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\HistoryController;

// Rutas de autenticación
Route::post('login', [AuthController::class, 'login']);//Login
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);//Logout

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);        // Listar todos los usuarios
        Route::post('/', [UserController::class, 'store']);       // Crear un nuevo usuario
        Route::get('{id}', [UserController::class, 'show']);      // Mostrar un usuario específico
        Route::put('{id}', [UserController::class, 'update']);    // Actualizar un usuario
        Route::delete('{id}', [UserController::class, 'destroy']); // Eliminar un usuario
    });

    Route::middleware('role:worker')->prefix('workers')->group(function () {
        Route::get('/', [WorkerController::class, 'index']);      // Listar todos los trabajadores
        Route::post('/', [WorkerController::class, 'store']);     // Crear un nuevo trabajador
        Route::get('{id}', [WorkerController::class, 'show']);    // Mostrar un trabajador específico
        Route::put('{id}', [WorkerController::class, 'update']);  // Actualizar un trabajador
        Route::delete('{id}', [WorkerController::class, 'destroy']);// Eliminar un trabajador
    });

    Route::prefix('history')->group(function () {
        Route::get('/', [HistoryController::class, 'index']);      // Listar todos los registros de historial
        Route::post('/', [HistoryController::class, 'store']);     // Crear un nuevo registro de historial
        Route::get('{id}', [HistoryController::class, 'show']);    // Mostrar un registro de historial específico
        Route::put('{id}', [HistoryController::class, 'update']);  // Actualizar un registro de historial
        Route::delete('{id}', [HistoryController::class, 'destroy']);// Eliminar un registro de historial
    });
});