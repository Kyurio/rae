<?php
require_once("../../config/core/Autoload.php");
require_once("../../config/extends/Redirecciones.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    try {

        $request = json_decode(file_get_contents("php://input"), true);
    
        $id_cliente = 1; // capturar por session
        $reseña = $request["str_reseña"];
    
        echo Reseñas::GrabarReseña($id_cliente, $reseña);

    } catch (\Throwable $th) {

        Redirecciones::Err(500);
    }

}else{

    Redirecciones::Err(403);

}

?>