<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas SIAP | Links</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="module-page">
        @include('layout.navigation')
        <p class="eyebrow">Bienvenidos a Sistemas SIAP clasificados</p>
        <p class="intro">A continuación encontrarás los links a los recursos del SIS de los Hospitales</p>
        <hr>

        @forelse ($tiposEstablecimiento as $tipoEstablecimiento)
            <section class="panel support-panel">
                <h1>
                    <button
                        class="siap-toggle"
                        type="button"
                        aria-expanded="false"
                        aria-controls="siap-table-{{ $loop->index }}"
                        data-collapse-target="siap-table-{{ $loop->index }}"
                    >
                        <span>{{ $tipoEstablecimiento->tipo }}</span>
                        <span class="siap-toggle-icon" aria-hidden="true">+</span>
                    </button>
                </h1>

                <div class="siap-table" id="siap-table-{{ $loop->index }}" role="table" aria-label="Unidades de salud" hidden>
                    <div class="siap-row siap-header" role="row">
                        <strong role="columnheader">Nombre</strong>
                        <strong role="columnheader">URL</strong>
                        <strong role="columnheader">Acción</strong>
                    </div>

                    @forelse ($tipoEstablecimiento->unidadesSalud as $unidadSalud)
                        <article class="siap-row" role="row">
                            <div role="cell">
                                <h3>{{ $unidadSalud->nombre }}</h3>
                            </div>
                            <a class="siap-url" href="{{ $unidadSalud->url }}" target="_blank" rel="noopener noreferrer" role="cell">
                                {{ $unidadSalud->url }}
                            </a>
                            <div role="cell">
                                <button class="copy-button" type="button" data-copy-value="{{ $unidadSalud->url }}">
                                    Copiar URL
                                </button>
                            </div>
                        </article>
                    @empty
                        <p class="support-item">No hay unidades de salud registradas para este tipo.</p>
                    @endforelse
                </div>
            </section>
        @empty
            <section class="panel">
                <p>No hay tipos de establecimiento registrados.</p>
            </section>
        @endforelse
    </main>
</body>
</html>