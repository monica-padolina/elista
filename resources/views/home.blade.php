<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Elista</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #d3b6a0;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Elista</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('list_groups.create') }}">Create New List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 mt-5 pt-5 text-center">
                <img src="{{ asset('man-vector.jpeg') }}" alt="Background image" class="img-fluid">
            </div>

            <div class="col-md-6 mt-5 pt-5">
                <div class="container mt-5 float-right">
                    <div class="col-md-10 mb-3">
                        <div class="card h-100">
                            <div class="card-header text-white bg-dark text-center">
                                List Groups
                            </div>
                            <div class="card-body">
                                @foreach (\App\Models\ListGroup::with('todolists')->get() as $group)
                                    <li class="card-text">
                                        <a style="color: #63452a" href="{{ route('list_groups.edit', $group->id) }}">
                                            {{ $group->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

 





    <!-- Include Bootstrap JS from CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
