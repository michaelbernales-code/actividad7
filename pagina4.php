<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de tipo string</title>
</head>
<body>
    <h3>Ejemplo 4</h3>
    <?php
    $cadena1 = "diego";
    $cadena2 = "juan";
    $cadena3 = "ana";

    // Concatenación de cadenas con el operador punto (.)
    $todo = $cadena1 . " " . $cadena2 . " " . $cadena3 . "<br>";
    echo $todo;

    $edad1 = 24;
    // Sustitución/concatenación con variable numérica
    echo $cadena1 . " tiene " . $edad1 . " años de edad";
    ?>
    <hr>
</body>
</html>