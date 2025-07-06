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
Route::patch('/tasks/{task}/update', [TaskController::class, 'update']);  
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);  

