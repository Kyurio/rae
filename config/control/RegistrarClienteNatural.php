<?php

# comunicador entre front y back 

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");
require_once("../../config/extends/UploadFile.php");

// validacion de metodo de contacto

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            
    function SubirArchivoCarnet(){
        
        $archivo = $_FILES["files"];
        
        if(UploadFile::upload_files($archivo, $archivo["name"])){

            echo json_encode("true");

        }else{

            echo json_encode("false");

        }

    }

    function GrabarDatosBd() {

        $request = json_decode(file_get_contents("php://input"), true);


        $str_rut = $request["str_rut"];
        $str_apellido_materno = $request["str_apellido_materno"];
        $str_apellido_paterno = $request["str_apellido_paterno"];
        $str_nombre = $request["str_nombres"];
        $int_sexo = $request["int_sexo"];
        $int_estado_civil = $request["int_estado_civil"];
        $str_direccion_particular = $request["str_direccion_particular"];
        $int_pais = $request["int_pais"];
        $int_region = $request["int_region"];
        $int_comuna = $request["int_comuna"];
        $str_nacionalidad = $request["str_nacionalidad"];
        $str_profecion = $request["str_profecion"];
        $str_telefono = $request["str_telefono_contacto"];
        $str_telefono_2 = $request["str_telefono_contacto_2"];
        $str_celular = $request["str_celular"];
        $str_direccion_comercial = $request["str_direccion_comercial"];
        $str_mail = $request["str_email"];
        $str_fecha_creacion = date("Y-m-d");
        $str_giro = $request["str_giro"];
        $str_mayores_clientes = $request["str_mayores_clientes"];
        $int_ejecutivo = 2; // se carga por session
        $str_observaciones = $request["str_observaciones"];
        $str_fecha_nacimiento = $request["str_fecha_nacimiento"];
        $int_estado = 1; //activo
        $int_sucursal = 1;
        $str_carnet_cliente =  $_FILES["str_carnet_cliente"]["name"];


        
        if(PersonaNatural::GrabarClientePeronsaNatural($str_rut,$str_apellido_paterno, $str_apellido_materno, $str_nombre,$int_sexo, $str_fecha_nacimiento, $int_estado_civil, $str_direccion_particular, $int_pais, $int_region, $int_comuna, $str_nacionalidad, $str_profecion, $str_telefono, $str_telefono_2,$str_celular, $str_direccion_comercial, $str_mail, $str_fecha_creacion, $str_giro, $str_mayores_clientes, $int_ejecutivo, $str_observaciones, $int_estado, $int_sucursal, $str_carnet_cliente)){

            // si la insercion en la base de datos es exitosa se sube el archivo al serivodr
            echo SubirArchivoCarnet();


        }

    }


    // ejecuta la funcion principal
    echo GrabarDatosBd();

    

}else{  

    // al no ser post redirecciona a la pagina 
    Redirecciones::Err(403);

}

?>