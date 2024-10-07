<?php
include_once 'apiCrud.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method='GET'>
        <h3>Usuario</h3>
        <br>
        <input type="text" name='user' required>
        <h3>Contraseña</h3>
        <br>
        <input type="password" name='pass' required>
        <br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>


