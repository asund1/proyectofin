<?php
session_start();
define('SMARTY_BASE_DIR', '../../src/views/backend/');

// Importación ficheros necesarios
require_once('../../include/functions_backend.inc.php');

// Comprobación de la sesión
checkSessionAdmin(true);

// Variable que recoge datos para la plantilla
$templateData = null;
$templateData['page'] = 'brands';
$templateData['subpage'] = true;
$templateData['title'] = 'Marcas / Modelos - Los Ángeles Moto Rent';

// Se obtienen los datos para la página
// 1. Listado de marcas
$brands = getBrandModelsData('brands');
if(count($brands) > 0) {
    $templateData['brands'] = $brands;
}

// 2. Ranking de las cinco marcas más alquiladas
$ranking = getBrandModelsData('ranking');
if(count($ranking) > 0) {
    $templateData['ranking'] = $ranking;
}

// 3. Listado de modelos
$models = getBrandModelsData('models');
if(count($brands) > 0) {
    $templateData['models'] = $models;
}

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, 'template.tpl', $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}
