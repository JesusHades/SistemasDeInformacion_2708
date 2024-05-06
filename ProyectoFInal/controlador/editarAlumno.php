<?php 

if(!empty($_POST["botonRegistrar"])) {
    if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["numCuenta"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombres = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $numCuenta = $_POST["numCuenta"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
       
        $sql = $conexion->query(" update alumnos set nombres='$nombres', apellidos='$apellidos', numCuenta='$numCuenta', fecha='$fecha', correo='$correo' where id=$id ");

        if ($sql==1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al Modificar Registro</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Campos Vacios</div>';
    }

}




?>