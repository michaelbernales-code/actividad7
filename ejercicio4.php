<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Concatenación</title>
</head>
<body>
    <h3>Información Geográfica</h3>
    <?php
    $ciudad = "Lima";
    $pais = "Perú";
    $continente = "América del Sur";

    // Concatenación en una cuarta variable
    $ubicacion = $ciudad . ", " . $pais . " - " . $continente . "<br>";
    echo $ubicacion;

    $habitantesMillones = 10;
    // Segunda frase usando concatenación explícita
    echo "La ciudad de " . $ciudad . " tiene más de " . $habitantesMillones . " millones de habitantes.";
    ?>
</body>
</html>