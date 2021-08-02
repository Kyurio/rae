<?php 

// clase pora extraer ciudad, pais, region. 
require_once("../../config/extends/Redirecciones.php");

class EstadoCivil extends Conexion{

    public function Estados_Civil() {

        try{

            //consulta
            $sql = "SELECT * FROM estado_civil";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();

            return json_encode($stmt->fetchAll());

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            
            Redirecciones::Err(500);
            
        }

    }

}