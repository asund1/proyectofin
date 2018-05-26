<?php
// Config
session_start();
$templateData = null;
$templateName = 'template.tpl';
$templateData['title'] = 'Registro - Los Ángeles Moto Rent';
$templateData['page'] = 'registro';
define('SMARTY_BASE_DIR', 'src/views/frontend/');

// Importación ficheros necesarios
require_once('include/functions_frontend.inc.php');
require_once('include/login_functions.inc.php');

if(isset($_POST['regbtn'])) {
    echo 'form enviado';
} else {
    echo 'adiós';
}

// Se aplica la plantilla
//try {
//    applyTemplate(SMARTY_BASE_DIR, $templateName, $templateData);
//} catch(Exception $e) {
//    echo $e->getMessage();
//}