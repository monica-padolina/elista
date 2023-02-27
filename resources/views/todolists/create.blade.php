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
                    <form action="{{ route('list_groups.todolists.store', $listGroup) }}" method="POST">
                        @csrf
                        <div class="card-header" style="background-color: #d3b6a0;">{{ __('New Task in ') }} {{ $listGroup->name }}</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Task</label>
                                <input type="text" class="form-control" name="name" placeholder="List Name">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
@endsection
