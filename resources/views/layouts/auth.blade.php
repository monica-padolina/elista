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
    <title>{{ config('app.name', 'ELista') }}</title>
</head>

<body class="c-app">


    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                  <div class="card-body">
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>    
        </div>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>

</html>