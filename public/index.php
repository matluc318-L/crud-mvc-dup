<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../util/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../util/boostrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../util/boostrap/style/styles.css">
</head>

<body>

</body>
<?php
require_once __DIR__ . '/../controllers/usuarioController.php';
$usuario = new usuarioController();
$action = $_GET['action'] ?? "index";
$id = $_GET['id'] ?? null;
switch($action){
    case "index":
        $usuario->index();
        break;
    case "editar":
        $usuario->find($id);
        break;
        case "update":
            $id = $_GET['id'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $usuario->update($id, $name, $lastname);
            break;
        case "eliminar":
            $usuario->delete($id);
            break;
        case "create":
            $usuario->create();
            break;
        case"store";
        $usuario->store($_POST);
        break;
}
#$usuario->index();


?>
<?php  require_once __DIR__ . '../Aindex.php';?>


</html>