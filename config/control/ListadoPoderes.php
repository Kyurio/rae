<?php

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $request = json_decode(file_get_contents("php://input"), true);
    $option  = $request["option"];

    function Listado(){

        if($select = Poderes::ListadoPoderes()){

            echo $select;

        }

    }

    Listado();

}else{

    Redirecciones::Err(404);

}


?>