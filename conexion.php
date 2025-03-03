
<?php

/*
$username = "root";
$password = "";
$database = "instituto";
$host = "localhost";

EXAMEN: Para que no se pueda cambiar los datos de la conexion de mi BD, uso define o const:

define("username", "root");
define("password", "");
define("database", "instituto");
define("host", "localhost");
*/

const username = "root";
const password = "";
const database = "universidad";
const host = "localhost";

$connection = new mysqli(host, username, password, database);

if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
} else {
    echo "";
}

?>