<?php
/**
 * Fichero para la configuración del motor de plantillas Smarty.
 * Author: María Asunción Daza Panchón
 */

// Se importa el motor de plantillas
require_once 'Smarty.class.php';

/**
 * Función que aplica una plantilla smarty a una página
 * @param string $folder Directorio base de la plantilla
 * @param string $template Nombre de la plantilla
 * @param array $data Datos asociados a la plantilla
 */
function applyTemplate($folder, $template, $data) {
    // Creación del objeto smarty
    $smarty = new Smarty;
    $smarty->cache_dir = $folder.'cache';
    $smarty->config_dir = $folder.'configs';
    $smarty->template_dir = $folder.'templates';
    $smarty->compile_dir = $folder.'templates_c';
    $config['date'] = '%Y-%m-%d';
    $config['time'] = '%H:%M:%S';
    $smarty->assign('config', $config);
    $smarty->assign('yesterday', strtotime('-1 day'));
    
    // Si hay datos para asignar a la plantilla
    if($data != null) {
        foreach($data as $key => $valor) {
            $smarty->assign($key, $valor);
        }
    }
    
    // Mostramos la plantilla
    $smarty->display($template);
}