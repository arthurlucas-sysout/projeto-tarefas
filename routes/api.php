<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Ele automaticamente já cria os métodos do controller: index, create, store, show, edit, update, destroy
Route::resource('users', UserController::class);

Route::resource('tasks', TaskController::class);

