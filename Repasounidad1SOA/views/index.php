<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery/jquery-3.7.1.min.js"></script>
</head>
<body>
     <h2> CRUD ESTUDIANTES</h2>
      <form action="">
            <input type="text" name="cedula">
            <input type="text" name ="Nombe">
      </form>
      <table id= 'tabla' border='5'>
        <thead>
            <tr>
                <th>Cedula </th>
                <th>Nombre </th>
                <th>Apellido </th>
                <th>Direccion </th>
                <th>Telefono </th>
                <th>Curso </th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
      </table>
<script>
    function cargarTabla(){
        $.ajax(
            url:'http://localhost/Repasounidad1SOA/controllers/apiCrud.php',
            method: 'get',
            dataType: 'json',
            success:function(data){
                let fila= '';
                $.each(data,function(index,estudiante){
                    filas += `<tr>
                            <td>${estudiante.estCedula}</td>
                            <td>${estudiante.estNombre}</td>
                            <td>${estudiante.estApellido}</td>
                            <td>${estudiante.estDireccion}</td>
                            <td>${estudiante.estTelefono}</td>
                            <td>${estudiante.curId}</td>
                        </tr>`;
            $('#tabla tbody').html(filas);
                });

            }
        );
    }
    $(document).ready(function(){
        cargarTabla();
    });

</script>


</body>
</html>