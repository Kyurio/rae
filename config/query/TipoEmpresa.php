<?php 

// clase pora extraer ciudad, pais, region. 
require_once("../../config/extends/Redirecciones.php");

class TipoEmpresa extends Conexion{

    public function ListadoTiposEmpresa() {

        try{

            //consulta
            $sql = "SELECT * FROM tipo_empresa";
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