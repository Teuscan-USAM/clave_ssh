<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso SSH</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="wide-page">
        @include('layout.navigation')
        <p class="eyebrow">Panel seguro</p>
        <h1>Acceso SSH</h1>
        <p class="intro">Introduce una URL para preparar los datos de acceso.</p>

        <section class="panel" aria-labelledby="form-title">
            <form id="access-form">
                <label id="form-title" for="url">URL del servidor</label>
                <div class="input-row">
                    <input id="url" name="url" type="url" placeholder="https://ejemplo.com" required>
                    <button type="submit">Continuar</button>
                </div>
            </form>

            <section id="credentials-panel" class="credentials-panel hidden" aria-live="polite">
                <div class="success-header">
                    <div class="status-badge">
                        <span class="status-dot"></span>
                        <span>EXITO</span>
                    </div>
                    <h2>¡Credenciales generadas!</h2>
                    <span class="status-pill"><span class="status-dot status-dot--pill"></span> LISTO</span>
                </div>

                <div class="credentials-list">
                    <div class="credential-card">
                        <span class="credential-label">ACCESO SSH</span>
                        <div class="credential-line">
                            <strong id="ssh-generated">—</strong>
                            <button class="copy-button copy-button--card" data-copy-target="ssh-generated" type="button" disabled aria-label="Copiar SSH">COPIAR</button>
                        </div>
                    </div>

                    <div class="credential-card">
                        <span class="credential-label">FORMATO SIS</span>
                        <div class="credential-line">
                            <strong id="siap-generated">—</strong>
                            <button class="copy-button copy-button--card" data-copy-target="siap-generated" type="button" disabled aria-label="Copiar SIAP">COPIAR</button>
                        </div>
                    </div>

                    <div class="credential-card">
                        <span class="credential-label">FORMATO SIAP</span>
                        <div class="credential-line">
                            <strong id="sis-generated">—</strong>
                            <button class="copy-button copy-button--card" data-copy-target="sis-generated" type="button" disabled aria-label="Copiar SIS">COPIAR</button>
                        </div>
                    </div>

                    <div class="credential-card">
                        <span class="credential-label">Formato basesiap</span>
                        <div class="credential-line">
                            <strong id="basesiap-generated">basesiap</strong>
                            <button class="copy-button copy-button--card" data-copy-target="basesiap-generated" type="button" disabled aria-label="Copiar basesiap">COPIAR</button>
                        </div>
                    </div>

                    <div class="credential-card">
                        <span class="credential-label">Formato b4s3s14p</span>
                        <div class="credential-line">
                            <strong id="b4s3s14p-generated">b4s3s14p</strong>
                            <button class="copy-button copy-button--card" data-copy-target="b4s3s14p-generated" type="button" disabled aria-label="Copiar b4s3s14p">COPIAR</button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
</body>
</html>