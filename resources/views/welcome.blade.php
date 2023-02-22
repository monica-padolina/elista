<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css"
        integrity="sha512-2xznCEl5y5T5huJ2hCmwhvVtIGVF1j/aNUEJwi/BzpWPKEzsZPGpwnP1JrIMmjPpQaVicWOYVu8QvAIg9hwv9w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ELista</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center text-dark">
        @if (Route::has('login'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-6">
                        <div class="clearfix">
                            <h1 class="float-start display-3 me-4">ELISTA</h1>
                            <h4 class="pt-3">Take control of your day.</h4>
                            <p class="text-medium-emphasis">One to do list at a time.</p>
                        </div>
                        <div class="mt-2">
                            @auth
                                <a class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-dark text-light btn-lg">Log in </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Register</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endauth    
            @endif
        </div>
    </body>

    </html>

