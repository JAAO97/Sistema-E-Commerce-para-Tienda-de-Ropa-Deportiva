@extends('layouts.tienda')

@section('titulo', 'Inicio')

@section('content')

    @php
        $disciplinas = [
            ['nombre' => 'Fútbol',     'color' => '#3d5a45'],
            ['nombre' => 'Running',    'color' => '#a8553a'],
            ['nombre' => 'Basketball', 'color' => '#9a6b3c'],
            ['nombre' => 'Gimnasio',   'color' => '#2e3236'],
        ];

        $novedades = [
            ['nombre' => 'Camiseta Dry Fit',       'precio' => 450],
            ['nombre' => 'Short de entrenamiento', 'precio' => 380],
            ['nombre' => 'Zapatillas Runner',      'precio' => 1850],
            ['nombre' => 'Licra deportiva',        'precio' => 520],
            ['nombre' => 'Sudadera con capucha',   'precio' => 990],
            ['nombre' => 'Medias deportivas',      'precio' => 120],
            ['nombre' => 'Gorra deportiva',        'precio' => 250],
            ['nombre' => 'Mochila de gimnasio',    'precio' => 780],
        ];

        $ofertas = [
            ['nombre' => 'Camiseta de fútbol',       'precio' => 900,  'oferta' => 650],
            ['nombre' => 'Zapatillas de basketball', 'precio' => 2400, 'oferta' => 1900],
            ['nombre' => 'Pants de entrenamiento',   'precio' => 850,  'oferta' => 600],
            ['nombre' => 'Chaqueta cortavientos',    'precio' => 1300, 'oferta' => 990],
        ];
    @endphp

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <p class="text-uppercase text-white-50 mb-2">Nueva temporada</p>
                <h1 class="display-4 fw-bolder">Entrena sin límites</h1>
                <p class="lead fw-normal text-white-50 mb-4">Ropa y calzado deportivo para Fútbol, Running, Basketball y Gimnasio.</p>
                <a class="btn btn-light btn-lg px-4" href="#novedades">Ver colección</a>
            </div>
        </div>
    </header>

    <section class="py-5" id="disciplinas">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder text-center mb-4">Compra por disciplina</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-lg-4 g-4">
                @foreach ($disciplinas as $disciplina)
                    <div class="col">
                        <a href="#" class="card text-white text-decoration-none h-100 border-0 shadow-sm" style="background-color: {{ $disciplina['color'] }}">
                            <div class="card-body d-flex align-items-center justify-content-center py-5">
                                <h5 class="card-title fw-bolder mb-0">{{ $disciplina['nombre'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="novedades">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder text-center mb-4">Novedades</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($novedades as $producto)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Nuevo</div>
                            <div class="ratio ratio-4x3 bg-secondary bg-opacity-10">
                                <div class="d-flex align-items-center justify-content-center text-secondary">
                                    <i class="bi-bag fs-1"></i>
                                </div>
                            </div>
                            <div class="card-body p-4 text-center">
                                <h5 class="fw-bolder">{{ $producto['nombre'] }}</h5>
                                L {{ number_format($producto['precio'], 2) }}
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#">Ver producto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5" id="ofertas">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder text-center mb-4">Ofertas</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($ofertas as $producto)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                            <div class="ratio ratio-4x3 bg-secondary bg-opacity-10">
                                <div class="d-flex align-items-center justify-content-center text-secondary">
                                    <i class="bi-bag fs-1"></i>
                                </div>
                            </div>
                            <div class="card-body p-4 text-center">
                                <h5 class="fw-bolder">{{ $producto['nombre'] }}</h5>
                                <span class="text-muted text-decoration-line-through">L {{ number_format($producto['precio'], 2) }}</span>
                                L {{ number_format($producto['oferta'], 2) }}
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent text-center">
                                <a class="btn btn-outline-dark mt-auto" href="#">Ver producto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection