<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', [AuthController::class, 'user']);

    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('projects', ProjectsController::class);
    Route::apiResource('tasks', TasksController::class);
    Route::get('/latest-projects', [ProjectsController::class, 'latestProjects']);
});