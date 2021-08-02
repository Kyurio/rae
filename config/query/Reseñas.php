<?php 

class Reseñas extends Conexion {

    private static $int_id_reseña;
    private static $int_id_cliente;
    private static $str_reseña;



    // funcion que registra en la base de datosa los clientes persona natural
    public function GrabarReseña($id_cliente, $reseña) {

        try {
            
            // parametros de consulta
            self::$int_id_cliente = filter_var($id_cliente, FILTER_SANITIZE_STRING);
            self::$str_reseña = filter_var($reseña, FILTER_SANITIZE_STRING);

            $sql = "INSERT INTO reseña (id_cliente, reseña) VALUES (':id_cliente', ':reseña')";
            $stmt = Conexion::conectar()->prepare($sql);

            $stmt->bindParam(":id_cliente", self::$int_id_cliente, PDO::PARAM_INT);
            $stmt->bindParam(":reseña", self::$str_reseña, PDO::PARAM_STR);
        
            if($stmt->execute()){
                return json_encode("true");
            } else {
                return json_encode("false");
            }

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        } catch (\Throwable $th) {
            
            Redirecciones::err(500);

        }
    
    }

}