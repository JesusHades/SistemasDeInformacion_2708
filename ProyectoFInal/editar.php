<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registros</title>
</head>
<body>
<form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Modificar Registro de Alumno</h3>

        <?php

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

</body>
</html>