<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel App')</title>

    {{-- Bootstrap CSS por defecto --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

</head>
<body>

    {{-- Navbar opcional (puedes quitarla si no la usas) --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/trainers') }}">Trainers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/trainers/create') }}">Crear</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Bootstrap JS por defecto --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
    {{-- Toastr JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    </script>
    <script>
            function showToastr() {
                event.preventDefault(); // Evita el envío del formulario para mostrar el toastr
                toastr.success('Formulario enviado correctamente', 'Éxito');
                setTimeout(() => {
                    document.querySelector('form').submit(); // Envía el formulario después de mostrar el toastr
                }, 2000); // Espera 2 segundos antes de enviar el formulario
            }
    </script>
    <script>
        function mostrareliminad(){
            event.preventDefault(); // Evita el envío del formulario para mostrar el toastr
            toastr.error('Eliminado correctamente', 'Éxito');
            setTimeout(() => {
                window.location.href = event.target.href; // Redirige después de mostrar el toastr
            }, 2000); // Espera 2 segundos antes de redirigir
        }
    </script>
    <script>
        function confirmDelete(id) {
            event.preventDefault(); // Evita la redirección inmediata
            toastr.warning('Eliminando registro...', 'Advertencia', {
                closeButton: true,
                progressBar: true,
                timeOut: 2000, // 2 segundos
                onHidden: function() {
                    window.location.href = `/delete/${id}`; // Redirige al enlace de eliminación
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmDelete(id) {
            event.preventDefault(); // Evita la redirección inmediata

            // Muestra la ventana de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esta acción.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Muestra el toastr
                    toastr.success('Eliminado correctamente', 'Éxito', {
                        closeButton: true,
                        progressBar: true,
                        timeOut: 2000, // 2 segundos
                        onHidden: function() {
                            // Redirige al enlace de eliminación
                            window.location.href = `/delete/${id}`;
                        }
                    });
                }
            });
        }
    </script>
        
</body>
</html>
