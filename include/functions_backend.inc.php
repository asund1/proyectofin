<?php
/**
 * Fichero con la configuración para el backend
 */

// Importación de ficheros
require_safe_backend('../include/smarty_templates.php');
require_safe_backend('../classes/DB.php');
require_safe_backend('../config.php');

/**
 * Función que se encarga de requerir el fichero pasado en los parámetros.
 * Comprueba si el fichero existe, si no existe genera una nueva ruta para que se pueda
 * utilizar en caso de subdirectorios.
 * 
 * @param String $file ruta original al fichero (desde el directorio administracion/.)
 */
function require_safe_backend($file) {
    if(file_exists($file)) {
        require_once($file);
    } else {
        require_once('../'.$file);
    }
}

/**
 * Función que comprueba la sesión del usuario administrador.
 * Si no hay iniciada sesión, redirigue al index del backend.
 * @param bool $subdir True si se trata de un subdirectorio dentro del backend. False en caso contrario.
 */
function checkSessionAdmin($subdir) {
    if(!isset($_SESSION['admin'])) {
        
        if($subdir) {
            header('Location: ../index.php');
        } else {
            header('Location: index.php');
        }
        
    }
}

/**
 * Función que obtiene los datos para mostrar en el dashboard.
 * 
 * @param String $tipo Datos que se quieren obtener
 * @return array Array con los datos obtenidos de la BD
 */
function getResumeDataDashboard($tipo) {
    
    switch ($tipo) {
        case 'totales':
            $data = DB::getResumeDataDashboard();
            break;
        case 'reservas':
            $data = DB::getRecentRentals();
            break;
        case 'activas':
            $data = DB::getActiveRentals();
            break;
    }
   
    return $data;
}

/**
 * Función que obtiene de la base de datos el listado de vehículos.
 * @return array Array con el listado de vehículos
 */
function getVehiclesList() {
    $data = DB::getVehiclesList();
    
    return $data;
}


/**
 * Función que obtiene los datos necesarios sobre para el apartado de marcas/modelos de vehículos.
 * @param string $tipo Tipo de dato que se quiere sacar de la bd
 */
function getBrandModelsData($tipo) {
    switch($tipo) {
        case 'brands':
            $data = DB::getBrandsList();
            break;
        case 'models':
            $data = DB::getModelsList();
            break;
        case 'ranking':
            $data = DB::getRankingModels();
            break;
    }
    
    return $data;
}

