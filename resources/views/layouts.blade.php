<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Bootstrap por CDN (rápido) --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    {{-- Espacio para estilos extra --}}
    @stack('styles')
</head>
<body class="bg-light">

    {{-- Navbar sencilla --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Mi App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="mainNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/trainers') }}">Trainers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/trainers/create') }}">Crear</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido --}}
    <main class="container py-4">
        @yield('content')
    </main>

    {{-- Footer opcional --}}
    <footer class="py-4 bg-white border-top">
        <div class="container text-center text-muted small">
            &copy; {{ date('Y') }} · Mi App
        </div>
    </footer>

    {{-- JS de Bootstrap --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    {{-- Espacio para scripts extra --}}
    @stack('scripts')
</body>
</html>
