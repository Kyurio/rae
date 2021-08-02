<?php

# comunicador entre front y back 

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");
require_once("../../config/extends/UploadFile.php");

// validacion de metodo de contacto

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            
    function SubirArchivoRepresentante(){
        
        $archivo = $_FILES["files"];
        
        if(UploadFile::upload_files($archivo, $archivo["name"])){

            echo json_encode("true");

        }else{

            echo json_encode("false");

        }

    }

    function GrabarDatosBd() {

        $request = json_decode(file_get_contents("php://input"), true);

        $rut_empresa = $request["rut_empresa"];
        $razon_social_empresa = $request["razon_social_empresa"];
        $tipo_empresa = $request["tipo_empresa"];
        $fecha_informe_sociedad_empresa = $request["fecha_informe_sociedad_empresa"];
        $rol_empresa = $request["rol_empresa"];
        $direccion_comerial_empresa = $request["direccion_comerial_empresa"];
        $region_empresa = $request["region_empresa"];
        $pais_empresa = $request["pais_empresa"];
        $comuna_empresa = $request["comuna_empresa"];
        $email_empresa = $request["email_empresa"];
        $telefono_contacto_empresa = $request["telefono_contacto_empresa"];
        $telefono_contacto_2_empresa = $request["telefono_contacto_2_empresa"];
        $celular_empresa = $request["celular_empresa"];
        $mayores_clientes_empresa = $request["mayores_clientes_empresa"];
        $observaciones_empresa = $request["observaciones_empresa"];

         
        if(Representantes::GrabarRepresentante($rut_empresa, $razon_social_empresa, $tipo_empresa, $fecha_informe_sociedad_empresa, $rol_empresa, $direccion_comerial_empresa, $region_empresa, $pais_empresa, $comuna_empresa, $email_empresa, $telefono_contacto_empresa, $telefono_contacto_2_empresa, $celular_empresa, $mayores_clientes_empresa, $observaciones_empresa)){
            
            
            // si la insercion en la base de datos es exitosa se sube el archivo al serivodr
            echo SubirArchivoRepresentante();


        }

    }


    // ejecuta la funcion principal
    echo GrabarDatosBd();

    

}else{  

    // al no ser post redirecciona a la pagina 
    Redirecciones::Err(403);

}

?>