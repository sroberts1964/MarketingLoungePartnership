<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use \App\Models\Task;

Route::get('/', function () {
    return view('tasks', [
        'tasks' => Task::all()
            ]);
});

Route::post('/tasks', [TaskController::class, 'store']);  
