<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MissatgeController;


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', [AuthController::class, 'user']);

    Route::get('/users', [UserController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
    /*
    Route::apiResource('projects', ProjectsController::class);
    Route::apiResource('tasks', TasksController::class);
    Route::get('/latest-projects', [ProjectsController::class, 'latestProjects']);
    */
    Route::apiResource('missatges', MissatgeController::class);

    Route::get('/api/missatges/entrada', [MissatgeController::class, 'missatgesEntrada']);
    Route::get('/api/missatges/sortida', [MissatgeController::class, 'missatgesSortida']);



});