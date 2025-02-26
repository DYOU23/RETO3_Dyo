
<?php

const username = "root";
const password = "";
const database = "universidad";
const host = "localhost";

$connection = new mysqli(host, username, password, database);

if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
} else {
    echo "Conexión realizada con éxito";
}

?>