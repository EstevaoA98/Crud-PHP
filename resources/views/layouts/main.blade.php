<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="/">Eventos Dev</a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events/create">Criar eventos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Eventos abertos</a>
                        <ul class="dropdown-menu">
                            @foreach ($events as $event)
                                <li>
                                    <a class="dropdown-item" href="">{{ $event->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Meus eventos</a>
                        </li>
                        <form class="d-flex justify-content-end" action="/logout" method="POST">
                            @csrf
                            <button onclick="event.preventDefault();this.closest('form').submit();" class="btn btn-custom p-lg-1">Sair</button> 
                        </form>
                    @endauth
                </ul>
                @guest
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <a href="/register" class="btn btn-custom p-lg-1">Cadastrar</a>
                        <a href="/login" class="btn btn-custom p-lg-1">Login</a>
                    </div>
                @endguest

            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-center mt-auto py-4">
        <div class="container">
            <p class="mb-0">EventosDev {{ date('Y') }} &copy;</p>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
