<?php
class Conexion{
    public function conectar(){
    $con= new PDO('mysql:host=localhost;dbname=cuarto','root','');
    return $con;
    }

}

  

?>