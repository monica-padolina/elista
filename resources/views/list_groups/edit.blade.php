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
                    <form action="{{ route('list_groups.update', $listGroup) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header" style="background-color: #d3b6a0;">{{ __('Edit To Do List Group') }}</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">TASKS</label>
                                <input value="{{ $listGroup->name }}" type="text" class="form-control" name="name">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
                <div class="container mt-3">
                    <form action="{{ route('list_groups.destroy', $listGroup) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('You are deleting the entire list. Confirm?')">Delete This List Group</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
@endsection
