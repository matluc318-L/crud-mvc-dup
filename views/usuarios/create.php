<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:create:.</title>
</head>

<body>
    <h1>Nuevo Usuario</h1>

    <form action="index.php?action=store" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Id</label>
            <input type="text" class="form-control" name="id">

            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="ingresar un nombre" name="name">

            <label for="" class="form-label">lastName</label>
            <input type="text" class="form-control" placeholder="ingresar un apellido" name="lastname" >
            </div>
        <button type = "submit" class="btn btn-primary">agregar</button>
        
    </form>

</body>

</html>