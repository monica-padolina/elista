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
                                <label for="name" class="form-label">Task</label>
                                <input value="{{ $todolist->name }}" type="text" class="form-control" name="name" placeholder="List Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    </div>
                    <div class="container mt-3">
                        <form action="{{ route('list_groups.todolists.destroy', [$listGroup, $todolist]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this item?')">Delete This Task</button>
                        </form> 
                </div>  
            </div>
        </div>
    </div>
@endsection
