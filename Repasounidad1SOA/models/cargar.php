<?php
 include_once 'conexion.php';
 class Cargar{
    public static function cargar(){
      $conob=  new Conexion();
      $con= $conob->conectar();
      $sql= "SELECT * FROM estudiantes";
      $resul= $con->prepare($sql);
      $resul-> execute();
      $data= $resul-> fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($data);
    }
 }
        Cargar::cargar();

?>