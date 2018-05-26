<?php
session_start();
define('SMARTY_BASE_DIR', '../../src/views/backend/');

// Importación ficheros necesarios
require_once('../../include/functions_backend.inc.php');

checkSessionAdmin(true);

// Variable que recoge datos para la plantilla
$templateData = null;
$templateData['page'] = 'rent_resume';
$templateData['subpage'] = true;
$templateData['title'] = 'Resumen Alquileres - Los Ángeles Moto Rent';

// Datos necesarios para la página
// 1. Reservas activas
$reservas_activas = getResumeDataDashboard('activas');
if(count($reservas_activas) > 0) {
    $templateData['reservas_activas'] = $reservas_activas;
}

// 2. Nuevas reservas

// 3. Reservas semana actual

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, 'template.tpl', $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}