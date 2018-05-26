<?php

/**
 * Clase destinada a interactuar con la base de datos. 
 *
 * @author M. Asunción Daza
 */
class DB {
    
    // Datos conexión
    const HOST_DB = DB_HOST;
    const DB_NAME = DB_DBNAME;
    const USER_BD = DB_USER;
    const PASS_DB = DB_PASS;
    
    /**
     * Función encargada de ejecutar las consultas pasadas por parámetros.
     * 
     * @param String $statement Consulta a ejecutar
     * @param array $data Datos devueltos por la consulta
     * @return Resultado de la consulta
     */
    private function executeQuery($statement, $data) {
        try {
            // Se crea la conexión
            $connection = new PDO('mysql:host='.self::HOST_DB.';dbname='.self::DB_NAME, self::USER_BD, self::PASS_DB);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Se prepara y se ejecuta la consulta
            $query = $connection->prepare($statement);
            $query->execute($data);
            
        } catch (PDOException $ex) {
            $query = 'error '.$ex->getMessage();
        }
        
        return $query;
    }
    
    
    /**
     * Función que obtiene los datos necesarios para el login del usuario
     * @param String $user Email del usuario
     * @param String $type_user Tipo de usuario
     * @return array Resultados de la consulta
     */
    public function checkLoginUser($user, $type_user) {
        $statement = 'SELECT u.email, u.pass, u.tipo_usuario_id FROM usuarios u JOIN tipos_usuarios t ON u.tipo_usuario_id=t.id WHERE u.email=:email && t.tipo=:tipo';
        $data = array(':email'=>$user, ':tipo'=>$type_user);
        
        $record = self::executeQuery($statement, $data);
        
        if(!is_string($record)) {
            $record = $record->fetch();
        } 
        
        return $record;
        
    }
    
    /**
     * Función que se encarga de obtener los totales semanales para el resumen del dashboard.
     * @return array Array con total de reservas, total de ingresos y total de nuevos usuarios registrados.
     */
    public function getResumeDataDashboard() {
        
        // Se obtiene total reservas y total de ingresos de la última semana
        $statement = 'SELECT COUNT(id) AS total_reservas, SUM(precio_total) AS total_ingresos FROM alquileres '
                            .'WHERE fecha_creacion BETWEEN date_sub(current_timestamp(), INTERVAL 7 DAY) AND current_timestamp()';
        $records = self::executeQuery($statement, null);
        
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        // Se obtiene el total de usuarios registrados en la última semana
        $statement = 'SELECT COUNT(id) AS total_usuarios FROM usuarios '
                            .'WHERE fecha_registro BETWEEN date_sub(current_timestamp(), INTERVAL 7 DAY) AND current_timestamp()';
        $record = self::executeQuery($statement, null);
        
        if(!is_string($record)) {
            $records[] = $record->fetch();
        }
        
        return $records;
        
    }
  
    /**
     * Función que obtiene las reservas realizadas en las últimas 24 horas.
     * @return array Resultados obtenidos de la consulta
     */
    public function getRecentRentals() {
        $statement = 'SELECT a.id, CONCAT(u.nombre, " ", u.apellidos) AS usuario, v.matricula, a.fecha_inicio, a.fecha_fin, a.precio_total, a.estado '.
                            'FROM alquileres a JOIN usuarios u ON a.usuario = u.id '.
                            'JOIN vehiculos v ON a.vehiculo = v.id '.
                            'WHERE fecha_creacion BETWEEN date_sub(current_timestamp(), INTERVAL 1 DAY) AND current_timestamp()';
        
        $records = self::executeQuery($statement, null);
        
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
    
    /**
     * Función que obtiene los alquileres activos
     * 
     * @return array Array con los alquileres activos
     */
    public function getActiveRentals() {
        $statement = 'SELECT a.id, CONCAT(u.nombre, " ", u.apellidos) AS usuario, v.matricula, a.fecha_inicio, a.fecha_fin '.
                            'FROM alquileres a JOIN usuarios u ON a.usuario = u.id '.
                            'JOIN vehiculos v ON a.vehiculo = v.id WHERE estado = "activo"';
        
        $records = self::executeQuery($statement, null);
        
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
    
    /**
     * Función que obtiene el listado de vehículos.
     * @return array Array con el listado de vehículos
     */
    public function getVehiclesList() {
        $statement = 'SELECT v.id, mar.nombre AS marca, md.nombre AS modelo, v.matricula, md.cilindrada, ta.precio_dia '.
                            'FROM vehiculos v '.
                            'JOIN modelos_vehiculos md ON v.cod_modelo = md.id '.
                            'JOIN marcas_vehiculos mar ON md.cod_marca = mar.id '.
                            'JOIN tipos_alquiler ta ON md.tipo_alquiler = ta.id';
        
        $records = self::executeQuery($statement, null);
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
    
    /**
     * Función que obtiene el listado de marcas de vehículos
     * @return array Array con las marcas registradas.
     */
    public function getBrandsList() {
        $statement = 'SELECT * FROM marcas_vehiculos';
        
        $records = self::executeQuery($statement, null);
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
    
    /**
     * Función que obtiene el listado de modelos de vehículos
     * @return array Array con los modelos de los vehículos.
     */
    public function getModelsList() {
        $statement = 'SELECT md.id, md.nombre, mr.nombre AS marca, md.cilindrada, t.nombre AS tipo_alquiler, COUNT(v.id) AS total_vehiculos '.
                            'FROM modelos_vehiculos md '.
                            'JOIN marcas_vehiculos mr ON md.cod_marca = mr.id '.
                            'JOIN tipos_alquiler t ON md.tipo_alquiler = t.id '.
                            'JOIN vehiculos v ON v.cod_modelo = md.id '.
                            'GROUP BY md.id';
        
        $records = self::executeQuery($statement, null);
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
    
    /**
     * Función que obtiene el ranking de modelos más alquilador
     * @return array Array con los modelos de los vehículos.
     */
    public function getRankingModels() {
        $statement = 'SELECT md.nombre, mr.nombre AS marca, COUNT(a.vehiculo) AS num_total '.
                            'FROM modelos_vehiculos md '.
                            'JOIN marcas_vehiculos mr ON md.cod_marca = mr.id '.
                            'JOIN vehiculos v ON v.cod_modelo = md.id '.
                            'JOIN alquileres a ON a.vehiculo = v.id '.
                            'GROUP BY md.id '.
                            'ORDER BY num_total DESC LIMIT 5';
        
        $records = self::executeQuery($statement, null);
        if(!is_string($records)) {
            $records = $records->fetchAll();
        }
        
        return $records;
    }
}
