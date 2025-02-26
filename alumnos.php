<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
<form action="./insertaralumno.php" method="post" class="mt-4">
  <fieldset class="container px-4 text-center">
    <legend class="">Completa tus datos</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"></label>
      <input type="text" id="inputnombre" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"></label>
      <input type="text" id="inputapellido" name="apellido" class="form-control" placeholder="Apellido">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"></label>
      <input type="email" id="inputcorreo" name="correo" class="form-control" oninvalid="setCustomValidity ('Por favor, use un correo válido')" oninput="setCustomValidity('')" placeholder="Correo">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"></label>
      <input type="tel" pattern="[0-9]{9}" id="inputtelefono" name="telefono" class="form-control" oninvalid="setCustomValidity ('Por favor, use hasta 9 digitos')" oninput="setCustomValidity('')" placeholder="Teléfono">
    </div>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
  </fieldset>
</form>

</body>
</html>