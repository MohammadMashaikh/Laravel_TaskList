<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    

    public function index()
    {
        $tasks = Tasks::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate and store the task
        $task = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required',
            'completed' => 'required',
        ]);

        Tasks::create($task);

        return redirect()->route('tasks.index')->with('success_create', 'Task created successfully');
     
    }
 

    public function show ($id, Request $request)
    {
        $task = Tasks::find($id);
        return view('tasks.show', compact('task'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $task = Tasks::find($id);
    
        if (!$task) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    
        $task->completed = $request->input('completed');
        $task->save();
    
        return redirect()->route('tasks.show', $task->id)->with('success_update', 'Status updated successfully');
    }
}
