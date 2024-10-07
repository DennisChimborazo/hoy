<?php
include_once 'buscar.php';
$opc = $_SERVER['REQUEST_METHOD'];
switch ($opc) {
    case 'GET':
        Ingreso::ingresar();
        break;
    default:
        break;
}

?>