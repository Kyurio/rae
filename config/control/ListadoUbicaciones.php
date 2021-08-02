<?php

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $request = json_decode(file_get_contents("php://input"), true);
    $option  = $request["option"];

    function ListadoCiudades(){

        if($select = Ubicaciones::ciudad()){

            echo $select;

        }

    }

    function ListadoRegiones(){

        if($select = Ubicaciones::region()){

            echo $select;

        }

    }

    function Listadopaises(){

        if($select = Ubicaciones::pais()){

            echo $select;

        }

    }

    function ListadoComunas(){

        if($select = Ubicaciones::comuna()){

            echo $select;

        }

    }
    

    switch ($option) {

        case 'ciudad':
            ListadoCiudades();
            break;
        
        case 'region':
            ListadoRegiones();
            break;

        case 'pais':
            Listadopaises();
            break;

        case 'comunas':
            ListadoComunas();    
            break;

        default:

            echo "no data";
            break;
    }

}else{

    Redirecciones::Err(404);

}


?>