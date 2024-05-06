<?php

if(!empty($_POST["botonRegistrar"])){ //Se valida que se presione el boton
    //Se valida que los campos no esten vacios
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["numCuenta"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $nombres = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $numCuenta = $_POST["numCuenta"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query(" insert into alumnos(nombres, apellidos, numCuenta, fecha, correo)values('$nombres','$apellidos','$numCuenta','$fecha','$correo') ");

        if ($sql == 1) {
            echo '<div class="alert alert-success">Alumno Registrado Correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al Registrar Alumno</div>';
        }
        


    } else {
        echo '<div class="alert alert-warning">Falta Rellenar un Campo</div>';
    }
}
?>