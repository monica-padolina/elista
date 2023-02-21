<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListGroupRequest;
use App\Models\ListGroup;


class ListGroupController extends Controller
{

    public function create()
    {
        return view('list_groups.create');
    }

    public function store(StoreListGroupRequest $request)
    {
        ListGroup::create($request->validated());
        return redirect()->route('home');
    }

    public function edit(ListGroup $listGroup)
    {
        return view('list_groups.edit', compact('listGroup'));
    } 

    public function update(StoreListGroupRequest $request, ListGroup $listGroup)
    {
        $listGroup->update($request->validated());

        return redirect()->route('home');
    }

    public function destroy(ListGroup $listGroup)
    {
        $listGroup->delete();

        return redirect()->route('home');
    }
}
