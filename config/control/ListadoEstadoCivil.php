<?php

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $request = json_decode(file_get_contents("php://input"), true);
    $option  = $request["option"];

    function ListadoEstadoCivil(){

        if($select = EstadoCivil::Estados_Civil()){

            echo $select;

        }

    }

    ListadoEstadoCivil();

}else{

    Redirecciones::Err(404);

}


?>