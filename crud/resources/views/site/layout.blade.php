<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 CRUD </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-light justify-content-center">

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-6 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"> Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-6 text-sm text-gray-700 underline">Registrarse</a>
                @endif
        @endif
        </div>
        @endif
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categorias.index') }}">Categorias</a>
            </li>

        </ul>


    </nav>

    <body>

        <div class="container">

            @yield('content')
        </div>

    </body>

    </html>
