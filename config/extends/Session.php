<?php

class Session{

    
    public function start(){
        session_start();
    }

    public function Add($name, $value){
        $_SESSION[$name] = $value;
    }

    public function User($name, $value){
        $_SESSION[$name] = $value;
    }

    public function Returned($name){
        return $_SESSION[$name];
    }

    public function out(){
        session_unset();
        session_destroy();
    }

}