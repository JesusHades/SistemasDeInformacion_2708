<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Proyecto Final SI (CRUD)</title>
</head>
<body>
    <h1 class="text-center p-3" >Proyecto Final SI</h1>

    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de Alumnos</h3>

        <?php
        include "modelo/conexion.php";
        include "controlador/registro.php";
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres del Alumno</label>
    <input type="text" class="form-control" name="nombres">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos del Alumno</label>
    <input type="text" class="form-control" name="apellidos">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero de Cuenta</label>
    <input type="text" class="form-control" name="numCuenta">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fecha">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="text" class="form-control" name="correo">
  </div>

  <button type="submit" class="btn btn-primary" name="botonRegistrar" value="ok">Registrar</button>
</form>

<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Numero de Cuenta</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Correo Electronico</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "modelo/conexion.php";
  $sql = $conexion -> query(" select * from alumnos ");
  while ($datos = $sql->fetch_object()){ ?>
    <tr>
      <td><?= $datos->$id ?></td>
      <td><?= $datos->$nombres ?></td>
      <td><?= $datos->$apellidos ?></td>
      <td><?= $datos->$numCuenta ?></td>
      <td><?= $datos->$fecha ?></td>
      <td><?= $datos->$correo ?></td>
      <td>
        <a href="" class="btn btn-small btn-warning">Editar</a>
        <a href="" class="btn btn-small btn-danger">Eliminar</a>
      </td>
    </tr>
    <?php}
  ?>

  </tbody>
</table>

</div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>