<?php
session_start();
$templateData = null;
define('SMARTY_BASE_DIR', '../src/views/backend/');

// Importación ficheros necesarios
require_once('../include/functions_backend.inc.php');
require_once('../include/login_functions.inc.php');


// Si se quiere cerrar sesión
if(isset($_GET['salir'])) {
    session_destroy();
    $templateData['exit'] = true;
}

// Variable que recoge datos para la plantilla
$templateName = 'index_backend.tpl';
$templateData['subpage'] = false;
$templateData['title'] = 'Login backend';

// Se comprueba si se ha enviado el formulario de login
if(isset($_POST['login_btn'])) {
    
    if(checkLoginUser($_POST['email'], $_POST['pass'], 'admin')) {
        // Si el login es válido se guarda en la sesión
        $_SESSION['admin'] = true;
        $_SESSION['emailUsuario'] = $_POST['email'];
        
        // Se redirige al dashboard
        header('Location: dashboard.php');
        
    } else {
        // Si el login es inválido
        $templateData['loginInvalido'] = true;
    }
    
}

// Se aplica la plantilla
try {
    applyTemplate(SMARTY_BASE_DIR, $templateName, $templateData);
} catch(Exception $e) {
    echo $e->getMessage();
}