@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('list_groups.todolists.update', [$listGroup, $todolist]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit To Do List ') }}</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">To Do List</label>
                                <input value="{{ $todolist->name }}" type="text" class="form-control" name="name"
                                    placeholder="List Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Save To Do List</button>
                        </div>
                    </form>
                </div>
                <div class="container mt-3">
                    <form action="{{ route('list_groups.todolists.destroy', [$listGroup, $todolist]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this item?')">Delete
                            This List</button>
                    </form>
                </div>
                {{-- -- --}}
                <hr />
                <h2>{{ __('SUBTASKS') }} {{ $todolist->name }}</h2>

                <div class="card mb-4 mt-4 p-4">
                    <table class="table">
                        <tbody>
                            @foreach ($todolist->tasks as $task)
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $task->name }}
                                        </label>
                                    </td>
                                    {{-- Delete --}}
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('todolists.tasks.edit', [$todolist, $task]) }}">Edit</a>

                                        <form style="display: inline-block"
                                            action="{{ route('todolists.tasks.destroy', [$todolist, $task]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Delete this item?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr />

                {{-- -- --}}
                <div class="card">
                    @if ($errors->storetask->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->storetask->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('todolists.tasks.store', [$todolist]) }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">New Subtask</label>
                                <input value="{{ old('name') }}" type="text" class="form-control" name="name"
                                    placeholder="Task name">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="5" class="form-control" name="description">{{ old('description') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Subtask</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
@endsection
