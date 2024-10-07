<?php
 include_once "ingreso.php";
 $op= $_SERVER['REQUEST_METHOD'];
 switch ($op) {
    case 'POST':
        Ingresar::login();
        break;
    default:
        # code...
        break;
 }

?>