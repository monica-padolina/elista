@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                    <form action="{{ route('todolists.tasks.update', [$todolist, $task]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header" style="background-color: #d3b6a0;">{{ __('Edit Task') }}</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Task Name</label>
                                <input value="{{ $task->name }}" type="text" class="form-control" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="due_date" class="form-label">Due Date and Time</label>
                                <input type="date" class="form-control" name="due_date" value="{{ $task->due_date }}">
                                <input type="time" class="form-control mt-3" name="due_time" value="{{ $task->due_time }}" >
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea rows="5" class="form-control" name="description">{{ $task->description }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Task</button>
                        </div>
                    </form>
                </div>

         
            </div>
        </div>
    </div>
@endsection
