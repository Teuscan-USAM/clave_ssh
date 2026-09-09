<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte técnico | SSH Tool</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="wide-page">
        @include('layout.navigation')
        <p class="eyebrow">SCRIPTS SOLUCIONES SIS</p>
        <h1>Soporte técnico Secretaria de Estado</h1>
        <p class="intro">Encuentra soluciones a los scripts de soporte técnico del SIS.</p>

        <section class="panel support-panel" aria-labelledby="support-title">
            <div class="support-heading">
                <span class="status-badge"><span class="status-dot"></span> Modulos de ayuda</span>
                <h2 id="support-title">¿Que es lo que necesitas?</h2>
            </div>

            <div class="support-list">
                <article class="support-item">
                    <span class="support-number">01</span>
                    <div>
                        <h3><a href="{{ route('soporte.modulo1') }}">Soluciones generales y consultas SQL</a></h3>
                        <p>Creacion de apartado para soluciones generales y consultas SQL dentro del SIS.</p>
                    </div>
                </article>
                <article class="support-item">
                    <span class="support-number">02</span>
                    <div>
                        <h3><a href="{{ route('soporte.modulo2') }}">Consultas HCP y resolucion de casos dentro del modulo perinatal</a></h3>
                        <p>Solo necesitas la URL del servidor. No introduzcas contraseñas ni claves privadas.</p>
                    </div>
                </article>
                <article class="support-item">
                    <span class="support-number">03</span>
                    <div>
                        <h3><a href="{{ route('soporte.modulo3') }}">Soporte para problemas en la base de datos</a></h3>
                        <p>--Limpiar cache produccion SIS--</p>
                        <p>php app/console cache:clear --env=prod; php app/console assets:install --symlink --env=prod; php app/console cache:clear; php app/console assets:install --symlink;</p>
                    </div>
                </article>
                 <article class="support-item">
                    <span class="support-number">04</span>
                    <div>
                        <h3><a href="{{ route('soporte.modulo4') }}">Casos especiales</a></h3>
                        <p>Apartado para casos especiales que requieren atención adicional.</p>
                    </div>
                </article>
                 <article class="support-item">
                    <span class="support-number">05</span>
                    <div>
                        <h3><a href="{{ route('soporte.modulo5') }}">Tablas del SIS </a></h3>
                        <p>Conoce las tablas que mayormente se utilizan en el sistema SIS.</p>
                    </div>
                </article>
            </div>
        </section>
    </main>
</body>
</html>