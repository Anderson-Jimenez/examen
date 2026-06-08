<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MissatgeController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/missatges/create', function () {
    return view('missatges.create');
})->name('missatges.create');

Route::get('/missatge/{id}', function ($id) {
    return view('missatges.show', ['mensajeId' => $id]);
})->name('projects.edit');

Route::get('/api/missatges/entrada', [MissatgeController::class, 'missatgesEntrada']);
Route::get('/api/missatges/sortida', [MissatgeController::class, 'missatgesSortida']);
