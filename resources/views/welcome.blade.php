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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <div class="text-center">
                        <img src="{{ asset('bg-img.jpeg') }}" alt="Background image" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center mt-5 pt-5">

                <div class="text-center mt-5 pt-5">
                    <h1>Elista</h1>
                    <h4>Take control of your day.</h4>
                    <p>One to-do list at a time.</p>

                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                        @endif
                    @endauth
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
