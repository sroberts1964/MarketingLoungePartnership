<?php

namespace App\Http\Controllers;
use App\Models\Task;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return view('layout', [
            'tasks' => $tasks
        ]);
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'task' => 'required|string|max:100',
        ]);
        
        // Create a new task
        Task::create([
            'task' => $request->input('task'),
            'completed' => false,
        ]);
        
        // Redirect back to the homepage
        return redirect('/');
    }

}
