<?php 

class Representantes extends Conexion {

    private static $Cliente_Rut;
    private static $Rut_Representante;
    private static $Sexo_Representante;
    private static $Apellido_Paterno_Representante;
    private static $Apellido_Materno_Representante;
    private static $Nombres_Representante;
    private static $Domicilio_Particular_Representante;
    private static $Domicilio_Comercial_Representante;
    private static $Ciudad_Representante;
    private static $Nacionalidad_Representante;
    private static $Telefono_Contacto;
    private static $Estado_Civil_Representante;
    private static $Profesion_Representante;


    // funcion que registra en la base de datosa los representantes
    public function GrabarRepresentante($Cliente_Rut,$Rut_Representante,$Sexo_Representante,$Apellido_Paterno_Representante,$Apellido_Materno_Representante,$Nombres_Representante,$Domicilio_Particular_Representante,$Domicilio_Comercial_Representante,$Ciudad_Representante,$Nacionalidad_Representante,$Telefono_Contacto,$Estado_Civil_Representante,$Profesion_Representante) {

        // parametros de consulta
        self::$Cliente_Rut = filter_var($Cliente_Rut, FILTER_SANITIZE_STRING);
        self::$Rut_Representante = filter_var($Rut_Representante, FILTER_SANITIZE_STRING);
        self::$Sexo_Representante = filter_var($Sexo_Representante, FILTER_SANITIZE_STRING);
        self::$Apellido_Paterno_Representante = filter_var($Apellido_Paterno_Representante, FILTER_SANITIZE_STRING);
        self::$Apellido_Materno_Representante = filter_var($Apellido_Materno_Representante, FILTER_SANITIZE_STRING);
        self::$Nombres_Representante = filter_var($Nombres_Representante, FILTER_SANITIZE_STRING);
        self::$Domicilio_Particular_Representante = filter_var($Domicilio_Particular_Representante, FILTER_SANITIZE_STRING);
        self::$Domicilio_Comercial_Representante = filter_var($Domicilio_Comercial_Representante, FILTER_SANITIZE_STRING);
        self::$Ciudad_Representante = filter_var($Ciudad_Representante, FILTER_SANITIZE_STRING);
        self::$Nacionalidad_Representante = filter_var($Nacionalidad_Representante, FILTER_SANITIZE_STRING);
        self::$Telefono_Contacto = filter_var($Telefono_Contacto, FILTER_SANITIZE_STRING);
        self::$Estado_Civil_Representante = filter_var($Estado_Civil_Representante, FILTER_SANITIZE_STRING);
        self::$Profesion_Representante = filter_var($Profesion_Representante, FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO representantes (Cliente_Rut, Rut_Representante, Sexo_Representante, Apellido_Paterno_Representante, Apellido_Materno_Representante, Nombres_Representante, Domicilio_Particular_Representante, Domicilio_Comercial_Representante, Ciudad_Representante, Nacionalidad_Representante, Telefono_Contacto, Estado_Civil_Representante, Profesion_Representante) VALUES (':Cliente_Rut', ':Rut_Representante', ':Sexo_Representante', ':Apellido_Paterno_Representante', ':Apellido_Materno_Representante', ':Nombres_Representante', ':Domicilio_Particular_Representante', ':Domicilio_Comercial_Representante', ':Ciudad_Representante', ':Nacionalidad_Representante', ':Telefono_Contacto', ':Estado_Civil_Representante', ':Profesion_Representante')";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(':Cliente_Rut', self::$Cliente_Rut);
        $stmt->bindParam(':Rut_Representante', self::$Rut_Representante);
        $stmt->bindParam(':Sexo_Representante', self::$Sexo_Representante);
        $stmt->bindParam(':Apellido_Paterno_Representante', self::$Apellido_Paterno_Representante);
        $stmt->bindParam(':Apellido_Materno_Representante', self::$Apellido_Materno_Representante);
        $stmt->bindParam(':Nombres_Representante', self::$Nombres_Representante);
        $stmt->bindParam(':Domicilio_Particular_Representante', self::$Domicilio_Particular_Representante);
        $stmt->bindParam(':Domicilio_Comercial_Representante', self::$Domicilio_Comercial_Representante);
        $stmt->bindParam(':Ciudad_Representante', self::$Ciudad_Representante);
        $stmt->bindParam(':Nacionalidad_Representante', self::$Nacionalidad_Representante);
        $stmt->bindParam(':Telefono_Contacto', self::$Telefono_Contacto);
        $stmt->bindParam(':Estado_Civil_Representante', self::$Estado_Civil_Representante);
        $stmt->bindParam(':Profesion_Representante', self::$Profesion_Representante);
        

        if($stmt->execute()){
            return json_encode("true");
        } else {
            return json_encode("false");
        }

        // cierra la conexion
        Conexion::desconectar($sql, $stmt);
    }
    
}