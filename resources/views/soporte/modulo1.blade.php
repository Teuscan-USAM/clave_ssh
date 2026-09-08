<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 1 | SSH Tool</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="module-page">
        @include('layout.navigation')
        <p class="eyebrow">SCRIPTS SOLUCIONES SIS</p>
        <h1>Modulo 1</h1>
        <p class="intro">Utilidades generales para dar soporte a los tickets del SIS.</p>
        <hr>
         <div>
            <p class="eyebrow" style="margin-top: 20px;">Funcionalides utiles del SIS</p>
            <p>Agregar en la direccion URL: sis-soporte.php/ <br> Ejemplo: https://sis-hzacatecoluca.salud.gob.sv/sis-soporte.php/admin/</p>
         </div>

         <div>
            <p class="eyebrow" style="margin-top: 20px;">Cambiar a otro usuario para verificar el funcionamiento con ese usuario:</p>
            <p>agregar al final de la url despues del dominio: <br> ?_switch_user=user <br> para salirse: <br> ?_switch_user=_exit</p>
         </div>

         <div>
            <p class="eyebrow" style="margin-top: 20px;">Cambiar de usuario y ver resultados de las variables:</p>
            <p>Ver resultado de las variables en pantalla: <br> var_dump($variable);exit; 
            <br>Cambiar de usuario: <br> ?_switch_user=user 
            <br> para variables que sean demasiado grandes y agoten la memoria (mas seguro):
            <br> exit(\Doctrine\Common\Util\Debug::dump($variable));</p>
         </div>

         <div>
            <p class="eyebrow" style="margin-top: 20px;">Consultas SQL basicas para PostgreSQL</p>
            <p>Usa nombres de tablas y columnas reales de tu modulo. En la aplicacion, utiliza consultas parametrizadas y no concatenes valores recibidos del usuario.</p>

            <p><strong>Consultar y filtrar:</strong></p>
                            <pre><code>-- Todos los registros ordenados del mas reciente al mas antiguo
                SELECT id, nombre, estado, created_at
                FROM usuarios
                ORDER BY created_at DESC;

                -- Buscar sin distinguir mayusculas y minusculas
                SELECT id, nombre, correo
                FROM usuarios
                WHERE nombre ILIKE '%ana%'
                OR correo ILIKE '%@salud.gob.sv%';

                -- Filtrar por varios valores y por un rango de fechas
                SELECT *
                FROM tickets
                WHERE estado IN ('abierto', 'pendiente')
                AND created_at BETWEEN '2026-01-01' AND '2026-12-31';</code></pre>

                            <p><strong>INNER JOIN:</strong> devuelve solo registros que tienen relacion en ambas tablas.</p>
                            <pre><code>SELECT t.id, t.titulo, u.nombre AS usuario
                FROM tickets AS t
                INNER JOIN usuarios AS u ON u.id = t.usuario_id
                WHERE t.estado = 'abierto'
                ORDER BY t.id DESC;</code></pre>

                            <p><strong>LEFT JOIN:</strong> conserva todos los registros de la tabla izquierda, aunque no tengan relacion.</p>
                            <pre><code>SELECT u.id, u.nombre, COUNT(t.id) AS total_tickets
                FROM usuarios AS u
                LEFT JOIN tickets AS t ON t.usuario_id = u.id
                GROUP BY u.id, u.nombre
                ORDER BY total_tickets DESC;</code></pre>

                            <p><strong>Insertar, actualizar y borrar:</strong></p>
                            <pre><code>-- Insertar un registro y devolver el resultado
                INSERT INTO tickets (titulo, estado, usuario_id)
                VALUES ('Revisar acceso al SIS', 'abierto', 10)
                RETURNING id, titulo, estado;

                -- Actualizar: verifica primero el mismo WHERE con un SELECT
                UPDATE tickets
                SET estado = 'cerrado', updated_at = NOW()
                WHERE id = 25
                RETURNING id, estado, updated_at;

                -- Borrar un registro especifico
                DELETE FROM tickets
                WHERE id = 25
                RETURNING id;</code></pre>

            <p><strong>Consejos rapidos:</strong> antes de un <code>UPDATE</code> o <code>DELETE</code>, ejecuta el mismo <code>WHERE</code> con <code>SELECT</code>. Para cambios relacionados, usa una transaccion con <code>BEGIN;</code>, revisa el resultado y finaliza con <code>COMMIT;</code> o <code>ROLLBACK; para deshacer los cambios</code>.</p>
         </div>
    </main>
</body>
</html>