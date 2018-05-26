<?php
session_start();
define('SMARTY_BASE_DIR', '../../src/views/backend/');

// Importación ficheros necesarios
require_once('../../include/functions_backend.inc.php');

// Se comprueba la sesión
checkSessionAdmin(true);

// Variable que recoge datos para la plantilla
$templateData = null;
$templateData['page'] = 'vehicles';
$templateData['subpage'] = true;
$templateData['title'] = 'Listado de vehículos - Los Ángeles Moto Rent';

// Se obtiene el listado de vehículos
$list = getVehiclesList();
if(count($list) > 0) {
    $templateData['list'] = $list;
}

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, 'template.tpl', $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}