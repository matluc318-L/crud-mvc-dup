<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:ALUMNOS:.</title>
</head>
<body>
    <h1>Nuevo Alumno</h1>
    <form action="index.php?action=tienda" method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Id</label>
            <input type="text" class="form-control" name="id">  

            <label for="" class="form-label">nombre</label>
            <input type="text" class="form-control" placeholder="ingresar un nombre" name="nombre">

            <label for="" class="form-label">apellido</label>
            <input type="text" class="form-control" placeholder="ingresar un apellido" name="apellido" >
            </div>
            <label for="" class="form-label">grado</label>
            <input type="text" class="form-control" placeholder="ingresar un nombre" name="grado">
        <button type = "submit" class="btn btn-primary">agregar</button>

</body>
</html>