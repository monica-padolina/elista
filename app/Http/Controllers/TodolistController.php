<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodolistRequest;
use App\Models\ListGroup;
use App\Models\todolist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodolistController extends Controller
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
    public function create(ListGroup $listGroup)
    {
        return view('todolists.create', compact('listGroup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTodolistRequest $request, ListGroup $listGroup)
    {
        $listGroup->todolists()->create($request->validated());
        return view('todolists.create', compact('listGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListGroup $listGroup, todolist $todolist)
    {
        // $todolist->load('tasks');
        return view('todolists.edit', compact('listGroup', 'todolist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTodolistRequest $request, ListGroup $listGroup, todolist $todolist)
    {
        $todolist->update($request->validated());
        return view('todolists.edit', compact('listGroup', 'todolist'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListGroup $listGroup, todolist $todolist)
    {
        $todolist->delete();

        return view('todolists.edit', compact('listGroup', 'todolist'));
    }
}
