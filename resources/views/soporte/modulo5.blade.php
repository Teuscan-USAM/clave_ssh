<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 5 | SSH Tool</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <main class="module-page">
        @include('layout.navigation')
        <p class="eyebrow">Tablas del SIS que son importantes</p>
        <h1>Modulo 5</h1> 
        <p class="intro">Anotaciones sobre las tablas del SIS para darles soporte.</p>
        <hr>
        
        <pre><code>-- Algunas tablas o comandos para consultar los datos de los recien nacidos y partos en el sistema SIS de los hospitales
                            
                -- 1. PACIENTES Y EXPEDIENTES
                 SELECT * FROM mnt_paciente ORDER BY fecha_registro DESC LIMIT (10);
                 SELECT * FROM mnt_expediente WHERE numero = '9674-11';
                 SELECT * FROM public.mnt_expediente WHERE numero = '1575-23';

                 -- 2. CITAS Y DISTRIBUCIÓN DE CITA
                 SELECT * FROM cit_citas_dia ORDER BY fechahorareg DESC LIMIT (10);
                 SELECT * FROM cit_citas_dia WHERE id_estado = 11 LIMIT (20);
                 SELECT * FROM cit_citas_dia WHERE id_expediente = 47245;
                 SELECT * FROM cit_tipocita;
                 SELECT * FROM cit_estado_cita;
                 SELECT * FROM ctl_origen_cita ORDER BY id ASC;
                 SELECT * FROM cit_distribucion WHERE id = 51872;
                 SELECT * FROM cit_tipo_distribucion;
                 SELECT * FROM cit_distribucion_procedimiento;
                 SELECT * FROM cit_citas_procedimientos;
                 SELECT * FROM sec_agendamiento_dia sad;
                 SELECT * FROM sec_historial_cita_dia_subsec;

                 -- 3. HISTORIA CLINICA Y ATENCIÓN
                 SELECT * FROM sec_historial_clinico;
                 SELECT * FROM ctl_estado_historia_clinica;
                 SELECT * FROM ctl_tipo_historia_clinica cthc;
                 SELECT * FROM sec_motivo_consulta smc;
                 SELECT * FROM sec_signos_vitales_;          -- Tabla principal de signos vitales
                 SELECT * FROM sec_signos_vitales_prepa;     -- Tabla de signos vitales preoperatorios de las enfermeras
                 SELECT * FROM sec_diagnostico_paciente sdp;
                 SELECT * FROM sec_mov_paciente;
                 SELECT * FROM ctl_tipo_movimiento_paciente;
                 SELECT * FROM ctl_tipo_consulta;
                 SELECT * FROM ctl_atencion;

                 -- 4. EMERGENCIA Y TRIAGE
                 SELECT * FROM sec_emergencia;
                 SELECT * FROM eme_triage et;
                 SELECT * FROM eme_obstetricia;

                 -- 5. MATERNO / PERINATAL
                 SELECT * FROM sec_dato_embarazo;
                 SELECT * FROM sec_clap_perinatal scp;
                 SELECT * FROM sec_partograma sp;
                 SELECT * FROM public.sec_parto_aborto_perinatal;
                 SELECT * FROM sec_nacimiento_perinatal snp;
                 SELECT * FROM sec_recien_nacido_perinatal srnp;

                 -- 6. PROCEDIMIENTOS Y CIRUGÍAS
                 SELECT * FROM mnt_procedimiento_establecimiento;
                 SELECT * FROM public.mnt_tipo_procedimiento AS mtp;
                 SELECT * FROM mnt_ciq ORDER BY id DESC;
                 SELECT * FROM sec_cirugia sc;
                 SELECT * FROM ctl_piezas_intervenidas;

                 -- 7. ENFERMERÍA, RECETAS Y DIETAS
                 SELECT * FROM sec_anotacion_enfermeria sae;
                 SELECT * FROM sec_vacunacion_aplicada sva;
                 SELECT * FROM farm_recetas WHERE idhistorialclinico = 1092683;
                 SELECT * FROM hos_solicitud_dieta_paciente WHERE justificacion_anulacion IS NULL;

                 -- 8. OTROS SERVICIOS (Patología, Fisioterapia, Remisión, Censo)
                 SELECT * FROM pat_solicitudes_estudio pse;
                 SELECT * FROM sec_amputaciones_fisioterapia saf;
                 SELECT * FROM public.sec_remision_paciente;
                 SELECT * FROM public.sec_censo_diario;

                 -- 9. CATÁLOGOS Y MANTENIMIENTOS DEL SISTEMA
                 SELECT * FROM ctl_establecimiento WHERE nombre ILIKE '%Hospital Na %';
                 SELECT * FROM mnt_aten_area_mod_estab;
                 SELECT * FROM mnt_empleado;
                 SELECT * FROM mnt_tipo_empleado;
                 SELECT * FROM ctl_prioridad;
                 SELECT * FROM fos_user_user fuu;    

                 -- 10. INTERCONSULTAS Y TELEMEDICINA
                 SELECT * FROM mnt_expediente me where numero = '2780-22';
                 SELECT * FROM sec_historial_clinico shc where shc.id_numero_expediente = 111834;
                 SELECT * FROM sec_interconsulta si where si.id_historial_clinico = 1786285;
                 SELECT * FROM sec_interconsulta_respuesta sir where sir.id_interconsulta = 10980;
        </code></pre>
    </main>
</body>
</html>