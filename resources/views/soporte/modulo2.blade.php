<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 2 | SSH Tool</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="module-page">
        @include('layout.navigation')
        <p class="eyebrow">SCRIPTS SOLUCIONES SIS</p>
        <h1>Modulo 2</h1>
        <p class="intro">Encuentra soluciones a los problemas de HCP</p>
        <hr>

        <div>
            <p class="eyebrow" style="margin-top: 20px;">Consultas SQL basicas para PostgreSQL</p>
            <p>Tablas de los HCP funcionales o que estan ligadas a cada uno de los partos</p>

                <pre><code>-- Algunas tablas o comandos para consultar los datos de los recien nacidos y partos en el sistema SIS de los hospitales
                            
                            -- Tabla principal: sec_clap_perinatal
                            select * from sec_clap_perinatal scp where id = 16475;

                            -- Tabla relacionada: sec_clap_perinatal
                            select * from sec_parto_aborto_perinatal spap where spap.id_clap_perinatal = 16475;

                            -- Tabla relacionada: sec_parto_aborto_perinatal y da los datos del recien nacido
                            select * from sec_recien_nacido_perinatal srnp where srnp.id_parto_aborto = 14786;

                            -- Tabla relacionada: sec_parto_aborto_perinatal y da los datos del nacimiento
                            select * from sec_nacimiento_perinatal snp where snp.id_parto_aborto = 14786;

                            -- Tabla relacionada: sec_clap_perinatal para conocer el partograma
                            select * from sec_partograma sp  where sp.id_clap_perinatal = 17674;
                </code></pre>

         </div>
        
    </main>
</body>
</html>