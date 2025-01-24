<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio Web con PHP</title>
</head>
<body>
  <h1>Información sobre Edad y Números Pares</h1>

  <?php
  // Código PHP para calcular la edad y los números pares
  $edad = 25; // Asignamos un valor a la variable $edad
  $edad_futura = $edad + 10; // Calculamos la edad en 10 años

  if ($edad >= 18) {
    echo "<p>Eres mayor de edad</p>";
  } else {
    echo "<p>Eres menor de edad</p>";
  }

  for ($i = 1; $i <= 10; $i++) {
    echo "<p>$i</p>";
  }

  function esPar($numero) {
    if ($numero % 2 == 0) {
      return true;
    } else {
      return false;
    }
  }

  $numerosPares = [];

  for ($i = 20; $i <= 40; $i++) {
    if (esPar($i)) {
      $numerosPares[] = $i;
    }
  }

  echo "<p>Números Pares: " . implode(", ", $numerosPares) . "</p>";
  ?>

</body>
</html>
