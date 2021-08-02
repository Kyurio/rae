<?php 

# clase empresa todas las funciones van directo a la tabla persona_natural

class PersonaNatural extends Conexion {

    private static $rut;
    private static $apellido_paterno;
    private static $apellido_materno;
    private static $nombres;
    private static $sexo;
    private static $carnet_cliente;
    private static $fecha_nacimineto;
    private static $estado_civil;
    private static $direccion_particular;
    private static $pais;
    private static $region;
    private static $comuna;
    private static $nacionalidad;
    private static $profecion;
    private static $telefono_contacto;
    private static $telefono_contacto_2;
    private static $celular;
    private static $direccion_comercial;
    private static $email;
    private static $fecha_creacion;
    private static $giro;
    private static $mayores_clientes;
    private static $ejecutivo;
    private static $observaciones;
    private static $estado;
    private static $sucursal;

    // funcion que registra en la base de datosa los clientes persona natural
    public function GrabarClientePeronsaNatural($str_rut,$str_apellido_paterno, $str_apellido_materno, $str_nombre,$int_sexo, $str_fecha_nacimiento, $int_estado_civil, $str_direccion_particular, $int_pais, $int_region, $int_comuna, $str_nacionalidad, $str_profecion, $str_telefono, $str_telefono_2,$str_celular, $str_direccion_comercial, $str_mail, $str_fecha_creacion, $str_giro, $str_mayores_clientes, $int_ejecutivo, $str_observaciones, $int_estado, $int_sucursal, $str_carnet_cliente) {

        // parametros de consulta
        self::$rut = filter_var($str_rut, FILTER_SANITIZE_STRING);
        self::$apellido_paterno = filter_var($str_apellido_paterno, FILTER_SANITIZE_STRING);
        self::$apellido_materno = filter_var($str_apellido_materno, FILTER_SANITIZE_STRING);
        self::$nombres = filter_var($str_nombre, FILTER_SANITIZE_STRING);
        self::$sexo = filter_var($int_sexo, FILTER_SANITIZE_NUMBER_INT);
        self::$carnet_cliente = filter_var($str_carnet_cliente, FILTER_SANITIZE_STRING);
        self::$fecha_nacimineto = filter_var($str_fecha_nacimiento, FILTER_SANITIZE_STRING);
        self::$estado_civil = filter_var($int_estado_civil, FILTER_SANITIZE_NUMBER_INT);
        self::$direccion_particular = filter_var($str_direccion_particular, FILTER_SANITIZE_STRING);
        self::$pais = filter_var($int_pais, FILTER_SANITIZE_NUMBER_INT);
        self::$region = filter_var($int_region, FILTER_SANITIZE_NUMBER_INT);
        self::$comuna = filter_var($int_comuna, FILTER_SANITIZE_NUMBER_INT);
        self::$nacionalidad = filter_var($str_nacionalidad, FILTER_SANITIZE_STRING);
        self::$profecion = filter_var($str_profecion, FILTER_SANITIZE_STRING);
        self::$telefono_contacto = filter_var($str_telefono, FILTER_SANITIZE_STRING);
        self::$telefono_contacto_2 = filter_var($str_telefono_2, FILTER_SANITIZE_STRING); 
        self::$celular = filter_var($str_celular, FILTER_SANITIZE_STRING);
        self::$direccion_comercial = filter_var($str_direccion_comercial, FILTER_SANITIZE_STRING);
        self::$email = filter_var($str_mail, FILTER_SANITIZE_EMAIL);
        self::$fecha_creacion = filter_var($str_fecha_creacion, FILTER_SANITIZE_STRING);
        self::$giro = filter_var($str_giro, FILTER_SANITIZE_STRING);
        self::$mayores_clientes = filter_var($str_mayores_clientes, FILTER_SANITIZE_STRING);
        self::$ejecutivo = filter_var($int_ejecutivo, FILTER_SANITIZE_NUMBER_INT);
        self::$observaciones = filter_var($str_observaciones, FILTER_SANITIZE_STRING);
        self::$estado = filter_var($int_estado, FILTER_SANITIZE_NUMBER_INT);
        self::$sucursal = filter_var($int_sucursal, FILTER_SANITIZE_NUMBER_INT);

        $sql = "INSERT INTO persona_natural(Cliente_Rut, Sucursal, Nombres, Apellido_Paterno, Apellido_Materno,
        Sexo, Fecha_Nacimiento, Estado_Civil, Direccion_Particular, Pais, Region, Comuna, 
        Nacionalidad, Profesion, Telefono_Contacto, Telefono_Contacto2, Celular, 
        Direccion_Comercial, Correo, Fecha_Creacion, Ejecutivo, Observaciones, 
        Estado, Ocupacion, Mayores_Clientes, Foto_Cliente) 
        VALUES (:Cliente_Rut, :Sucursal, :Nombres, :Apellido_Paterno, 
        :Apellido_Materno, :Sexo, 
        :Fecha_Nacimiento, :Estado_Civil, 
        :Direccion_Particular, :Pais, :Region, 
        :Comuna, :Nacionalidad, :Profesion, :Telefono_Contacto, 
        :Telefono_Contacto2, :Celular, :Direccion_Comercial, 
        :Correo, :Fecha_Creacion, :Ejecutivo, :Observaciones, 
        :Estado, :Ocupacion, :Mayores_Clientes, :Foto_Cliente)";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":Cliente_Rut", self::$rut, PDO::PARAM_STR);
        $stmt->bindParam(":Sucursal", self::$sucursal, PDO::PARAM_INT);
        $stmt->bindParam(":Nombres", self::$nombres, PDO::PARAM_STR);
        $stmt->bindParam(":Apellido_Paterno", self::$apellido_paterno, PDO::PARAM_STR);
        $stmt->bindParam(":Apellido_Materno", self::$apellido_materno, PDO::PARAM_STR);
        $stmt->bindParam(":Sexo", self::$sexo, PDO::PARAM_INT);
        $stmt->bindParam(":Fecha_Nacimiento", self::$fecha_nacimineto, PDO::PARAM_STR);
        $stmt->bindParam(":Estado_Civil", self::$estado_civil, PDO::PARAM_INT);
        $stmt->bindParam(":Direccion_Particular", self::$direccion_particular, PDO::PARAM_STR);
        $stmt->bindParam(":Pais", self::$pais, PDO::PARAM_INT);
        $stmt->bindParam(":Region", self::$region, PDO::PARAM_INT);
        $stmt->bindParam(":Comuna", self::$comuna, PDO::PARAM_INT);
        $stmt->bindParam(":Nacionalidad", self::$nacionalidad, PDO::PARAM_STR);
        $stmt->bindParam(":Profesion", self::$profecion, PDO::PARAM_STR);
        $stmt->bindParam(":Telefono_Contacto", self::$telefono_contacto, PDO::PARAM_STR);
        $stmt->bindParam(":Telefono_Contacto2", self::$telefono_contacto_2, PDO::PARAM_STR);
        $stmt->bindParam(":Celular", self::$celular, PDO::PARAM_STR);
        $stmt->bindParam(":Direccion_Comercial", self::$direccion_comercial, PDO::PARAM_STR);
        $stmt->bindParam(":Correo", self::$email, PDO::PARAM_STR);
        $stmt->bindParam(":Fecha_Creacion", self::$fecha_creacion, PDO::PARAM_STR);
        $stmt->bindParam(":Ejecutivo", self::$ejecutivo, PDO::PARAM_STR);
        $stmt->bindParam(":Observaciones", self::$observaciones, PDO::PARAM_STR);
        $stmt->bindParam(":Estado", self::$estado, PDO::PARAM_STR);
        $stmt->bindParam(":Ocupacion", self::$giro, PDO::PARAM_STR);
        $stmt->bindParam(":Mayores_Clientes", self::$mayores_clientes, PDO::PARAM_STR);
        $stmt->bindParam(":Foto_Cliente", self::$carnet_cliente, PDO::PARAM_STR);

        if($stmt->execute()){
            return json_encode("true");
        } else {
            return json_encode("false");
        }

        // cierra la conexion
        Conexion::desconectar($sql, $stmt);
    }

    // extra el detalle de el cliente seleccionado, se filta por rut
    public function ClienteSeleccionado($rut) {

        try{

            self::$rut = filter_var($rut, FILTER_SANITIZE_STRING);

            //consulta
            $sql = "SELECT * FROM persona_natural WHERE Estado = 1 UNION ALL SELECT Nombre_Empresa AS name, Cliente_Rut, Fecha_Creacion FROM empresa WHERE Estado = 1 AND Cliente_Rut = :rut ORDER BY Fecha_Creacion DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":rut", self::$rut, PDO::PARAM_STR);
            $stmt->execute();

            return json_encode($stmt->fetchAll());

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            
            Redirecciones::Err(500);
            
        }

    }

    // funcion que lista los clientes registrados
    public function ListadoClientes(){

        try{

            //consulta
            $sql = "SELECT concat(Nombres,' ',Apellido_Paterno,' ',Apellido_Materno) as name , Cliente_Rut, Fecha_Creacion FROM persona_natural WHERE Estado = 1 UNION ALL SELECT Nombre_Empresa AS name, Cliente_Rut, Fecha_Creacion FROM empresa WHERE Estado =1 ORDER BY Fecha_Creacion DESC";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();

            return json_encode($stmt->fetchAll());

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            
            Redirecciones::Err(500);
            
        }

    }

    // extrae el rut y sucursal para validar que el cliente ya esta registrado
    public function RutCliente($rut) {
    
        try{

            self::$rut = filter_var($rut, FILTER_SANITIZE_STRING);

            //consulta
            $sql = "SELECT Nombre, Cliente_Rut FROM persona_natural a INNER JOIN sucursal b ON a.Sucursal = b.idSucursal WHERE Cliente_Rut = :rut ";
            $stmt = Conexion::conectar()->prepare($sql);
            $stmt->bindParam(":rut", self::$rut, PDO::PARAM_STR);
            $stmt->execute();

            return json_encode($stmt->fetchAll());  

            // cierra la conexion
            Conexion::desconectar($sql, $stmt);

        }catch (Exception $e){
            
            Redirecciones::Err(500);
            
        }

    }
    
}