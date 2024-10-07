<?php
include_once 'conec.php';
class Ingreso{
  public static function ingresar(){
        $user= $_GET['user'];
        $pass= $_GET['pass'];
        $varCon=new Conexion();
        $con= $varCon->conectar();
        $sql= "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
        $resul=$con->prepare($sql);
        $resul->execute();
        $data=$resul->fetchALL(PDO::FETCH_ASSOC);
        if (count($data)>0) {
            header ("location: hola.php");
            exit();
        }else {
            echo ("Usuario o contraseña Incorrecta");
        }
    }
}

?>