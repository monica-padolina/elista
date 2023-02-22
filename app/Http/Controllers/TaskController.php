<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use App\Models\todolist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request, todolist $todolist)
    {
        $todolist->tasks()->create($request->validated());

        return redirect()->route('list_groups.todolists.edit', [
            $todolist->list_group_id, $todolist
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todolist $todolist, Task $task)
    {
        return view('tasks.edit', compact('todolist','task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTaskRequest $request, todolist $todolist, Task $task)
    {
        $task->update($request->validated());
        
        return redirect()->route('list_groups.todolists.edit', [
            $todolist->list_group_id, $todolist
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todolist $todolist, Task $task)
    {
        $task->delete();

        return redirect()->route('list_groups.todolists.edit', [
            $todolist->list_group_id, $todolist
        ]);
    }
}
