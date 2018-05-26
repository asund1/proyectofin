<?php
session_start();
define('SMARTY_BASE_DIR', '../src/views/backend/');

// Importación ficheros necesarios
require_once('../include/functions_backend.inc.php');

// Se comprueba la sesión
checkSessionAdmin(false);

// Variable que recoge datos para la plantilla
$templateData = null;
$templateData['page'] = 'dashboard';
$templateData['subpage'] = false;
$templateData['title'] = 'Dashboard - Los Ángeles Moto Rent';

// Se obtienen los datos necesarios para el dashboard
// 1. Totales
$totales = getResumeDataDashboard('totales');
$templateData['total_reservas'] = $totales[0]['total_reservas'];
$templateData['total_ingresos'] = $totales[0]['total_ingresos'];
$templateData['total_usuarios'] = $totales[1]['total_usuarios'];

// 2. Reservas recientes
$reservas = getResumeDataDashboard('reservas');
if (count($reservas) > 0) {
    $templateData['reservas_recientes'] = $reservas;
}

// 3. Reservas activas
$reservas_activas = getResumeDataDashboard('activas');
if (count($reservas_activas) > 0) {
    $templateData['reservas_activas'] = $reservas_activas;
}

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, 'template.tpl', $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}