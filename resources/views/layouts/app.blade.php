<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css"
        integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ELISTA</title>
    <title>{{ config('app.name', 'ELista') }}</title>
</head>

<body class="c-app">

    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

            <li class="nav-title">{{ __('Manage To Do Lists') }}</li>
            @foreach (\App\Models\ListGroup::with('todolists')->get() as $group)
                <li class="nav-group"><a class="nav-link nav-toggle" href="{{ route('list_groups.edit', $group->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="m-3 bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                      </svg> {{ $group->name }}</a>
                    <ul class="nav-group-items">
                        @foreach ($group->todolists as $todolist)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('list_groups.todolists.edit', [$group, $todolist]) }}">
                                    <span class="nav-icon"></span>
                                    {{ $todolist->name }}</a>
                            </li>
                        @endforeach 
                        <li class="nav-title bg-primary">
                            <a class="nav-link" href="{{ route('list_groups.todolists.create', $group) }}">{{ __('Add List Item') }} </a>
                        </li>
                    </ul>
                </li>
            @endforeach

                <li class="nav-title bg-success">
                    <a class="nav-link text-white" href="{{ route('list_groups.create') }}">{{ __('New To Do List Group') }} </a>
                </li>


            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="m-3 bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                      </svg> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4 bg-dark">
            <div class="container-fluid justify-content-center text-light">
                <h1>ELISTA</h1>
            </div>
        </header>
        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
        </div>


        <!-- Optional JavaScript -->
        <!-- Popper.js first, then CoreUI JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.js"
            integrity="sha512-EXRb/1mTZs4VEgPqlabQWHw2hnGn269OM3QvLfLeEeEp7GznVGkbYdu+bU9bb/XLYda6drPfWCyoMm6RYwSZMg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>

</html>