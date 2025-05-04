<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:EDITAR:.</title>
</head>

<body>
    <h1>Editar</h1>

    <form action="index.php?action=update&id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Id</label>
            <input type="text" class="form-control" name="id" disabled value=   <?php echo $_GET['id'];?>>

            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="ingresar un nombre" name="name" value= <?php echo $usuario['name'];?>>

            <label for="" class="form-label">lastName</label>
            <input type="text" class="form-control" placeholder="ingresar un apellido" name="lastname" value= <?php echo $usuario['lastname'];?>>
            </div>
        <button type = "submit" class="btn btn-primary">editar</button>
        
    </form>

</body>

</html>