<?php
    include_once 'conec.php';
    class Ingresar{
        public static function login(){
            $obcon= new Conexion();
            $con= $obcon->conectar();
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $sql= "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
            $resul=$con->prepare($sql);
            $resul -> execute();
            $data = $resul-> fetchALL(PDO::FETCH_ASSOC);
            if (count($data)>0) {
                header("location: encuenta.php");
            }else {
                echo ('error de credenciales');
            }
        }
    }


?>