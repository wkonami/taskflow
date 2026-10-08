<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/sobre', function () {
    return 'TaskFlow - Gerenciador de Tarefas';
});

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index']);

require __DIR__.'/settings.php';
