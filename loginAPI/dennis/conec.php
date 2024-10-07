<?php
class Conexion{
    public function conectar(){
        $con= new PDO('mysql: host=localhost; dbname=login','root','');
        return $con;
    }


}

?>