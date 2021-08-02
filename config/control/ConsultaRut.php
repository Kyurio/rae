<?php

require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $request = json_decode(file_get_contents("php://input"), true);
    $rut = $request["str_rut"];

    function ValidadoDrRut($rut) {

        echo PersonaNatural::RutCliente($rut);

    } 

    $arr = ValidadoDrRut($rut);

    echo $arr;
    


    

}else{

    Redirecciones::Err(404);

}


?>