<!DOCTYPE html>
<html>
    <head>
        <title>GibJohn Tutoring - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            body {
                background-color: rgb(94, 52, 235);
            }
        </style>
    </head>
    <body class="text-light">
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
                <div class="container-fluid">
                    <span class="navbar-brand">GibJohn Tutoring</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-info">Login / Sign Up</button>
                        </form>
                    </div>
                </div>
            </nav>
            @endsection
            @yield('navbar')
        <div class="content text-center mt-3">
            @yield('content')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>