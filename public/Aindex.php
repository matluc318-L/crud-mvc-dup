<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <link href="../util/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../util/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../util/boostrap/style/styles.css">
</head>
<body>
</body>
<?php

require_once __DIR__ . '/../controllers/alumnosController.php';
$alumno = new alumnosController();
$action = $_GET['action'] ?? "index";
$id = $_GET['id'] ?? null;
switch($action){
    case "index":
        $alumno->index();
        break;
    case "find":
        $alumno->find($id);
        break;
    case "update":
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];             
            $apellido = $_POST['apellido'];
            $grado = $_POST['grado'];
            $alumno->update($id, $nombre, $apellido, $grado);
            break;
    case "delete":
        $alumno->delete($id);
        break;
    case "crear":
        $alumno->create();
        break;
    case "tienda":
        $alumno->tienda($_POST);
        break;
    }
   

?>
    

</html>