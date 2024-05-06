<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" select * from alumnos where id =$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Registros</title>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Registro de Alumno</h3>

        <?php

        while($datos=$sql->fetch_object()){ ?>
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres del Alumno</label>
    <input type="text" class="form-control" name="nombres" value="<?= $datos->nombres ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos del Alumno</label>
    <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero de Cuenta</label>
    <input type="text" class="form-control" name="numCuenta" value="<?= $datos->numCuenta ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
  </div>
        <?php }
        ?>



  <button type="submit" class="btn btn-primary" name="botonRegistrar" value="ok">Registrar</button>
</form>

</body>
</html>