<?php 

// clase pora extraer ciudad, pais, region. 
require_once("../../config/extends/Redirecciones.php");

class Ubicaciones extends Conexion{

    public function pais() {

        try{

            //consulta
            $sql = "SELECT * FROM pais";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();

            return json_encode($stmt->fetchAll());

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            
            Redirecciones::Err(500);
            
        }

    }

    public function ciudad() {

        try {
            
            $sql = "SELECT * FROM ciudades";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();

            return json_encode($stmt->fetchAll());
    
            // cierra la conexion
            Conexion::desconectar($sql, $stmt);


        } catch (\Throwable $th) {
            
            Redirecciones::Err(500);

        }

    }

    public function region() {

        try {
            
            $sql = "SELECT * FROM regiones";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return json_encode($stmt->fetchAll());
    
            // cierra la conexion
            Conexion::desconectar($sql, $stmt);


        } catch (\Throwable $th) {
            
            Redirecciones::Err(500);

        }

    }

    public function comuna() {
    
        try {
            
            $sql = "SELECT * FROM comunas";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();
            return json_encode($stmt->fetchAll());
    
            // cierra la conexion
            Conexion::desconectar($sql, $stmt);


        } catch (\Throwable $th) {
            
            Redirecciones::Err(500);

        }

    }

}