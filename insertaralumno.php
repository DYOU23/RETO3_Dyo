<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

require("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO alumnos (nombre, apellido, correo, telefono) VALUES ('". $nombre ."','". $apellido ."','". $correo ."',". $telefono .")";

if ($connection->query($sql) === TRUE) {
    echo "<p>Inserción del alumno ".$nombre. " correcta.</p>";
} else {
    echo "<p>Fallo en inserción.</p>";
}



$connection->close();

?>
</body>
</html>