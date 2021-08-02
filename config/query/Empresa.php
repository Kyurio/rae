<?php 

# clase empresa todas las funciones van directo a la tabla empresa

class Empresa extends Conexion {

    private static $rut;
    private static $razon_social;
    private static $tipo;
    private static $fecha_informe_sociedad;
    private static $rol;
    private static $direccion_comerial;
    private static $region;
    private static $pais;
    private static $comuna;
    private static $email;
    private static $telefono_contacto;
    private static $telefono_contacto_2;
    private static $celular;
    private static $mayores_clientes;
    private static $observaciones;
    private static $sucursal =1;
    private static $fecha_creacion ="asdas";
    private static $ejecutivo = 1;
    private static $estado = 1;
    private static $estado_informe_sociedad =1;
    private static $numero_informe_sociedad= 1;
    private static $ocupoacion = 1;

    // funcion que registra en la base de datosa los clientes persona natural
    public function GrabarEmpresa($rut_empresa, $razon_social_empresa, $tipo_empresa, $fecha_informe_sociedad_empresa, $rol_empresa, $direccion_comerial_empresa, $region_empresa, $pais_empresa, $comuna_empresa, $email_empresa, $telefono_contacto_empresa, $telefono_contacto_2_empresa, $celular_empresa, $mayores_clientes_empresa, $observaciones_empresa) {

        self::$rut = filter_var($rut_empresa, FILTER_SANITIZE_STRING); 
        self::$razon_social = filter_var($razon_social_empresa, FILTER_SANITIZE_STRING); 
        self::$tipo = filter_var($tipo_empresa, FILTER_SANITIZE_NUMBER_INT); 
        self::$fecha_informe_sociedad = filter_var($fecha_informe_sociedad_empresa, FILTER_SANITIZE_STRING); 
        self::$rol = filter_var($rol_empresa, FILTER_SANITIZE_STRING); 
        self::$direccion_comerial = filter_var($direccion_comerial_empresa, FILTER_SANITIZE_STRING); 
        self::$region = filter_var($region_empresa, FILTER_SANITIZE_NUMBER_INT); 
        self::$pais = filter_var($pais_empresa, FILTER_SANITIZE_NUMBER_INT); 
        self::$comuna = filter_var($comuna_empresa, FILTER_SANITIZE_NUMBER_INT);
        self::$email = filter_var($email_empresa, FILTER_SANITIZE_EMAIL);
        self::$telefono_contacto = filter_var($telefono_contacto_empresa, FILTER_SANITIZE_STRING); 
        self::$telefono_contacto_2 = filter_var($telefono_contacto_2_empresa, FILTER_SANITIZE_STRING); 
        self::$celular = filter_var($celular_empresa, FILTER_SANITIZE_STRING); 
        self::$mayores_clientes = filter_var($mayores_clientes_empresa, FILTER_SANITIZE_STRING); 
        self::$observaciones = filter_var($observaciones_empresa, FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO empresa (Cliente_Rut, Sucursal, Nombre_Empresa, Tipo_Empresa, Direccion_Comercial, Pais, Region, Comuna, Telefono_Contacto, Telefono_Contacto2, Celular, Correo, Fecha_Creacion, Ejecutivo, Observaciones, Estado, Fecha_Informe_Sociedad, Estado_Informe_Sociedad, Numero_Informe_Sociedad, Ocupacion, Mayores_Clientes, Informe_Legal) 
        VALUES (':Cliente_Rut', :Sucursal, ':Nombre_Empresa', :Tipo_Empresa, ':Direccion_Comercial', :Pais, :Region, :Comuna, ':Telefono_Contacto', ':Telefono_Contacto2', ':Celular', ':Correo', ':Fecha_Creacion', :Ejecutivo, ':Observaciones', :Estado, ':Fecha_Informe_Sociedad', :Estado_Informe_Sociedad, :Numero_Informe_Sociedad, ':Ocupacion', ':Mayores_Clientes', ':Informe_Legal')";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":Cliente_Rut", self::$rut, PDO::PARAM_STR);
        $stmt->bindParam(":Sucursal", self::$sucursal, PDO::PARAM_INT);
        $stmt->bindParam(":Nombre_Empresa", self::$razon_social, PDO::PARAM_STR);
        $stmt->bindParam(":Tipo_Empresa", self::$tipo, PDO::PARAM_STR);
        $stmt->bindParam(":Direccion_Comercial", self::$direccion_comerial, PDO::PARAM_STR);
        $stmt->bindParam(":Pais", self::$pais, PDO::PARAM_INT);
        $stmt->bindParam(":Region", self::$region, PDO::PARAM_INT);
        $stmt->bindParam(":Comuna", self::$comuna, PDO::PARAM_INT);
        $stmt->bindParam(":Telefono_Contacto", self::$telefono_contacto, PDO::PARAM_STR);
        $stmt->bindParam(":Telefono_Contacto2", self::$telefono_contacto_2, PDO::PARAM_STR);
        $stmt->bindParam(":Celular", self::$celular, PDO::PARAM_STR);
        $stmt->bindParam(":Correo", self::$email, PDO::PARAM_STR);
        $stmt->bindParam(":Fecha_Creacion", self::$fecha_creacion, PDO::PARAM_STR);
        $stmt->bindParam(":Ejecutivo", self::$ejecutivo, PDO::PARAM_INT);
        $stmt->bindParam(":Observaciones", self::$observaciones, PDO::PARAM_STR);
        $stmt->bindParam(":Estado", self::$estado, PDO::PARAM_INT);
        $stmt->bindParam(":Fecha_Informe_Sociedad", self::$fecha_informe_sociedad, PDO::PARAM_STR);
        $stmt->bindParam(":Estado_Informe_Sociedad", self::$estado_informe_sociedad, PDO::PARAM_INT);
        $stmt->bindParam(":Numero_Informe_Sociedad", self::$numero_informe_sociedad, PDO::PARAM_INT);
        $stmt->bindParam(":Ocupacion", self::$ocupoacion, PDO::PARAM_STR);


        if($stmt->execute()){
            return json_encode("true");
        } else {
            return json_encode("false");
        }

        // cierra la conexion
        Conexion::desconectar($sql, $stmt);
    }

    // extrae el rut y sucursal para validar que el cliente ya esta registrado
    public function RutCliente($rut) {
    
        try{

            self::$rut = filter_var($rut, FILTER_SANITIZE_STRING);

            //consulta
            $sql = "SELECT Nombre, Cliente_Rut FROM empresa a INNER JOIN sucursal b ON a.Sucursal=b.idSucursal WHERE Cliente_Rut = :rut ";
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