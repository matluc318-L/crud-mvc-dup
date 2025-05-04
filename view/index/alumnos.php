<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="util/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="util/boostrap/js/bootstrap.min.js"></script>
    <title>.:alumnos:.</title>
</head>
<h1>ALUMNOS</h1>

<body>
    <a href="index.php?action=crear">Nuevo Alumno</a>

    <table class="table">
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>grado</td>
            <td>action</td>
            </tr>
    <?php
    

            foreach($alumno as $alumnos){
            echo "<tr>
            <td>$alumnos[id]</td>
            <td>$alumnos[nombre]</td>
            <td>$alumnos[apellido]</td>
            <td>$alumnos[grado]</td>
            <td><a href=index.php?action=find&id=$alumnos[id]&nombre=$alumnos[nombre]&apellido=$alumnos[apellido]&grado=$alumnos[grado]>Editar</a> |
            <a href=index.php?action=delete&id=$alumnos[id]>Eliminar</a></td>   
        </tr>";
    }

    
    
    ?>
</table>
</body>

</html>