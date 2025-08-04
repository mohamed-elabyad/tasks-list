<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use PhpParser\Node\Expr\FuncCall;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', [
            'tasks' => Task::latest()->paginate(10)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $data = $request->validated();

        $task = Task::create($data);

        return redirect()->route('tasks.show', ['task' => $task->id])
            ->with('success', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('show', [
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('edit', [
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $data = $request->validated();

        $task->update($data);

        return redirect()->route('tasks.show', ['task' => $task->id])
            ->with('success', 'Task updated successfully!');
    }

    // mark task as completed or not completed
    public function patch(Task $task)
    {
        $task->toggleComplete();

        return redirect()->back()->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'task deleted successfully!');
    }
}
