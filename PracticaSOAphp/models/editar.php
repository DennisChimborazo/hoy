<?php
include_once "conexion.php";
class crudUpdate {
    public static function actualizarEstudiante() {
            $objetoconexion= new conexion();
            $conn= $objetoconexion->conectar();
            $cedula=$_POST['cedula'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $editarestudiante= "UPDATE estudiantes SET 
                                        nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono'
                                        WHERE cedula='$cedula'";
            $result=$conn->prepare($editarestudiante);
            $result->execute();
            print_r("se guardo correctamente ");
        }
    }
?>
        