<?php
 include_once "conexion.php";
 class crudDelete{
    public static function borrarEstudiante(){
        $objetoconexion= new conexion();
        $conn= $objetoconexion->conectar();
        $cedula=$_POST ['cedula'];
        $borrarestudiante= "DELETE FROM estudiantes WHERE cedula='$cedula'";
        $result=$conn->prepare($borrarestudiante);
        $result->execute();
        print_r("se elimino correctamente ");

    }
 }

?>