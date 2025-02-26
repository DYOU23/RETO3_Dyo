<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<div class="container px-4 text-center">
    <legend class="mt-4"></legend>

<div class="row">
    <div class="col-md-6">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CORREO</th>
      <th scope="col">TELEFONO</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php

require("conexion.php");

$sql = "SELECT * FROM alumnos";
$resultado = $connection->query($sql); 

if ($resultado->num_rows > 0) {
    echo "<h1>Alumnos</h1>";
    while ($fila = $resultado->fetch_assoc()) {

        echo "  <tr>
                <td>". $fila["nombre"] . "</td>
                <td>". $fila["apellido"] . "</td>
                <td>". $fila["correo"] . "</td>
                <td>". $fila["telefono"] . "</td>
                </tr>";
    }
} 

  ?>

    </tbody>
    </table>
</div>


<div class="col-md-6">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CORREO</th>
      <th scope="col">ESPECIALIDAD</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">

  <?php

require("conexion.php");

$sql = "SELECT * FROM profesores";
$resultado = $connection->query($sql); 

if ($resultado->num_rows > 0) {
    echo "<h1>Profesores</h1>";
    while ($fila = $resultado->fetch_assoc()) {

        echo "  <tr>
                <td>". $fila["nombre"] . "</td>
                <td>". $fila["apellido"] . "</td>
                <td>". $fila["correo"] . "</td>
                <td>". $fila["especialidad"] . "</td>
                </tr>";
    }
} 

  ?>


                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>