<?php 

class Login extends Session{

    private $user;
    private $pass;


    public function login(string $user, string $pass) {

        // parametros de consulta
        self::$user = filter_var($pass, FILTER_SANITIZE_EMAIL);
        self::$pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $sql = "SELECT user, pass FROM usuarios WHERE usuer = :usuario AND pass = :pass ";
        $stmt = Conexion::conectar()->prepare($sql);

        $stmt->bindParam(":"."usuario", self::$user, PDO::PARAM_STR);
        $stmt->bindParam(":"."pass", self::$pass, PDO::PARAM_STR);
        
        $stmt->execute();

        return $stmt->fetch();

        // cierra la conexion
        Conexion::desconectar($sql, $stmt);
    }
    
}
