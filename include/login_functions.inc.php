<?php
/**
 * Fichero con las funciones necesarias para el login de usuarios.
 * Author: María Asunción Daza Panchón
 */

/**
 * Función que comprueba el login de un usuario.
 * 
 * @param String $login Email del usuario
 * @param String $password Contraseña del usuario
 * @param String $userType 'admin' => administrador, 'usuario'=>usuario
 * @return boolean True si el login es válido, False en caso contrario
 */
function checkLoginUser($login, $password, $userType) {
    
    $loginValido = false;
    $result = DB::checkLoginUser($login, $userType);
    
    // Si existe el usuario y es del tipo indicado
    if(count($result) != 0) {
        // Se comprueba la contraseña
       $loginValido = password_verify($password, $result['pass']);
    }
    
    return $loginValido;
    
}



