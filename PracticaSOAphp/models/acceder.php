<?php
include_once "conexion.php";
    class crudSelect{
        public static function seleccionarEstudiantes(){
            $selectEstudiantes="SELECT * FROM estudiantes ";
            $objetoconexion= new conexion();
            $conn= $objetoconexion->conectar();
            $result=$conn->prepare($selectEstudiantes);
            $result->execute();
            $data= $result->fetchAll(PDO::FETCH_ASSOC);
            $dataJson=json_encode($data);
            return $dataJson;
              }
        }

?>