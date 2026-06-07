<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/projects/create', function () {
    return view('projectes.create');
})->name('projects.create');

Route::get('/projectes/{id}', function ($id) {
    return view('projectes.edit', ['projectId' => $id]);
})->name('projects.edit');
