<?php
  include_once '../models/acceder.php';
  include_once '../models/borrar.php';
  include_once '../models/guardar.php';
  include_once '../models/editar.php';
  include_once '../models/buscar.php';

  $lista=[];
   $opc =  $_SERVER ['REQUEST_METHOD'];
    switch ($opc) {
        case 'GET':
            if (isset($_GET['buscar'])) {
                $cedula=$_GET['buscar'];
                $cd= new crudSelectbuscar();
                $lista = json_decode($cd->seleccionarEstudiantesBuscar($cedula), true);
                return $lista;
            }else {
             $cd= new crudSelect();
             $lista = json_decode($cd->seleccionarEstudiantes(), true);
             return $lista;
            }

            break;
        case 'POST':
            if (isset($_POST['_method']) && $_POST['_method'] === 'POST') {
                crudInsert::guardarEstudiante();
                header("Location: ../views/index.php");
                exit();
            } elseif (isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
                crudDelete::borrarEstudiante();
                header("Location: ../views/index.php");
                exit();
            } elseif (isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
                crudUpdate::actualizarEstudiante();
                header("Location: ../views/index.php");
                exit();
            }

            break;

            default:
                echo "Método HTTP no soportado";
                break;
    }
        
 
?>