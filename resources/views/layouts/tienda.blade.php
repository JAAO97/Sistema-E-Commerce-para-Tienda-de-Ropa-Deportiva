<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Sport Center')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="bg-dark text-white text-center py-2 small">
        Envíos a todo Honduras | Nueva temporada ya disponible
    </div>

    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bolder" href="{{ url('/') }}">Sport Center</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal" aria-controls="menuPrincipal"
                    aria-expanded="false" aria-label="Mostrar menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0 ms-xl-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mujer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hombre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Accesorios</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="#">Ofertas</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="menuDisciplinas" href="#" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">Disciplinas</a>
                        <ul class="dropdown-menu" aria-labelledby="menuDisciplinas">
                            <li><a class="dropdown-item" href="#">Fútbol</a></li>
                            <li><a class="dropdown-item" href="#">Running</a></li>
                            <li><a class="dropdown-item" href="#">Basketball</a></li>
                            <li><a class="dropdown-item" href="#">Gimnasio</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex me-xl-3 mb-2 mb-xl-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Buscar">
                    <button class="btn btn-outline-dark" type="submit"><i class="bi-search"></i></button>
                </form>

                <a class="btn btn-outline-dark me-xl-2 mb-2 mb-xl-0 text-nowrap" href="#" title="Iniciar sesión">
                    <i class="bi-person"></i><span class="d-xl-none ms-1">Iniciar sesión</span>
                </a>
                <a class="btn btn-outline-dark mb-2 mb-xl-0 text-nowrap" href="#">
                    <i class="bi-cart-fill me-1"></i>Carrito
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-5 mt-auto">
        <div class="container px-4 px-lg-5">
            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <h5 class="fw-bolder">Sport Center</h5>
                    <p class="text-white-50 mb-0">Ropa y calzado deportivo para Fútbol, Running, Basketball y Gimnasio.</p>
                </div>
                <div class="col-6 col-md-4">
                    <h6 class="fw-bolder">Tienda</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a class="text-white-50 text-decoration-none" href="#">Mujer</a></li>
                        <li><a class="text-white-50 text-decoration-none" href="#">Hombre</a></li>
                        <li><a class="text-white-50 text-decoration-none" href="#">Accesorios</a></li>
                        <li><a class="text-white-50 text-decoration-none" href="#">Ofertas</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h6 class="fw-bolder">Nuestras sedes</h6>
                    <p class="text-white-50 mb-1">Tegucigalpa, Boulevard Morazán</p>
                    <p class="text-white-50 mb-0">San Pedro Sula, Zona comercial</p>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <p class="m-0 text-center text-white-50 small">&copy; 2026 Sport Center | ISC-305 Programación Web | UNAH</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @stack('scripts')
</body>
</html>