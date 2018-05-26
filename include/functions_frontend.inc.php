<?php

// Importación de ficheros
require_safe_frontend('include/smarty_templates.php');
require_safe_frontend('classes/DB.php');
require_safe_frontend('config.php');

/**
 * Función que se ocupa de importar los ficheros requeridos de forma "segura".
 * Forma segura quiere decir, que si no se encuentra el fichero según la cadena pasada añade '../' al 
 * string para formar la cadena. Teniendo en cuenta que solo va a funciona si tenemos un nivel de 
 * directorio (nivel raíz y subdirectorio)
 * @param String $file Cadena con la ruta del fichero a importar
 */
function require_safe_frontend($file) {
    if(file_exists($file)) {
        require_once($file);
    } else {
        require_once('../'.$file);
    }
}

function validateFormSingup() {
    
}