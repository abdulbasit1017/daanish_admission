<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <title>@yield('title', 'Default Title')</title>
    <style>
        body {
            margin-top: 56px; /* Navbar ki height ke liye space */
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030; /* Make sure navbar is on top */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="http://127.0.0.1:8000/">Punjab Daanish School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/admission') }}">Admission Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/about') }}">About</a>
                </li>
                <!-- Add this to your layout Blade file if you want a link to the login page -->

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.form') }}">Login</a>
                </li>


            </ul>
        </div>
        </div>
    </nav>


    <!-- Page Content -->

        @yield('content')
    </div>
</body>
</html>
