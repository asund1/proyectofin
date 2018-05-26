<?php

// Config
session_start();
$templateData = null;
$templateName = 'template.tpl';
$templateData['title'] = 'Política de privacidad - Los Ángeles Moto Rent';
$templateData['page'] = 'privacidad';
define('SMARTY_BASE_DIR', 'src/views/frontend/');

// Importación ficheros necesarios
require_once('include/functions_frontend.inc.php');
require_once('include/login_functions.inc.php');

// Fichero de texto con las condiciones
//$file = file_get_contents("src/txt/condiciones.txt");
//$templateData['condiciones'] = $file;

$condiciones = new SimpleXMLElement(file_get_contents('src/xml/privacidad.xml'));

$templateData['condiciones'] = $condiciones;


// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, $templateName, $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}