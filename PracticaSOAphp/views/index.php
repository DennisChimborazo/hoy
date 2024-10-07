
<?php
include_once '../controllers/apiCrud.php';
$estudiantes = include('../controllers/apiCrud.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>CRUD ESTUDIANTES</h3>
<form action="" method='POST'>
    <label for="">Cédula</label>
    <input type="text" name='cedula' required>
    <br><br>
    <label for="">Nombre</label>
    <input type="text" name='nombre'>
    <br><br>
    <label for="">Apellido</label>
    <input type="text" name='apellido'>
    <br><br>
    <label for="">Dirección</label>
    <input type="text" name='direccion'>
    <br><br>
    <label for="">Teléfono</label>
    <input type="text" name='telefono'>
    <br><br>

    <button type="submit" name="_method" value="POST">Guardar estudiante</button>
    <button type="submit" name="_method" value="PUT">Editar estudiante</button>
    <button type="submit" name="_method" value="DELETE">Eliminar estudiante</button>
</form>
<br>
<form action="" method='get'>

    <label for="">buscar </label>
    <input type="text" name='buscar'>
    <button>buscar</button>
</form>

    <h2>Listado</h2>
    <div> <form action="../controllers/apiCrud.php" method='GET'>
        <table border='5'>
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    // Iteramos sobre los estudiantes obtenidos de la API
                    if (!empty($estudiantes)) {
                        foreach ($estudiantes as $estudiante) {
                            echo "<tr>";
                            echo "<td>" . $estudiante['cedula'] . "</td>";
                            echo "<td>" . $estudiante['nombre'] . "</td>";
                            echo "<td>" . $estudiante['apellido'] . "</td>";
                            echo "<td>" . $estudiante['direccion'] . "</td>";
                            echo "<td>" . $estudiante['telefono'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No hay estudiantes registrados</td></tr>";
                    }
                    ?>
                </tbody>       
        </table>
    </form></div>
</body>
</html>