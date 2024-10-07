<?php
include_once "conexion.php";
    class crudSelectbuscar{
        public static function seleccionarEstudiantesBuscar($cedula){
            $selectEstudiantes="SELECT * FROM estudiantes WHERE cedula='$cedula'";
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