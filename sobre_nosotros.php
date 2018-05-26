<?php

// Config
session_start();
$templateData = null;
$templateName = 'template.tpl';
$templateData['title'] = 'Sobre nosotros - Los Ángeles Moto Rent';
$templateData['page'] = 'about_us';
define('SMARTY_BASE_DIR', 'src/views/frontend/');

// Importación ficheros necesarios
require_once('include/functions_frontend.inc.php');
require_once('include/login_functions.inc.php');

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, $templateName, $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}