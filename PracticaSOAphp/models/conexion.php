<?php
class conexion{
    public static function conectar(){
        $con= new PDO('mysql:host=localhost;dbname=soa','root','');
        return $con;
    }
}
?>