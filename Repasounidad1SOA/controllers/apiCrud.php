<?php
$op=$_SERVER('REQUEST_METHOD');
switch ($op) {
    case 'get':
        Cargar::cargar();
        break;
    default:
        break;
}


?>