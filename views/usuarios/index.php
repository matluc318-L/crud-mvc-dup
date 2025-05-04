<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:USUARIOS:.</title>
    <link href="util/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="util/boostrap/js/bootstrap.min.js"></script>
    
</head>

<body>
    <?php include __DIR__ . '/../../public/navbar.php';?>
    <h1>Lista de Usuarios</h1>
    <a href="index.php?action=create">new user</a>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>name</td>
            <td>lastname</td>
            <td>action</td>
        </tr>
        
        <?php
            foreach($usuario as $usuarios){
                #echo $usuario['id'];
                echo "<tr>
            <td>$usuarios[id]</td>
            <td>$usuarios[name]</td>
            <td>$usuarios[lastname]</td>
            <td><a href=index.php?action=editar&id=$usuarios[id]&name=$usuarios[name]&lastname=$usuarios[lastname]>Editar</a> |
                <a href=index.php?action=eliminar&id=$usuarios[id]&name=$usuarios[name]&lastname=$usuarios[lastname]>eliminar</a> </td>    
            </tr>";
            }

        ?>
    </table>
    
    
    
    
</body>

</html>