<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Datos de Estudiante</title>
</head>
<body>
    <?php
    /* 
       Problema: Almacenar y mostrar la información básica de un estudiante 
       utilizando diferentes tipos de variables en PHP.
    */

    $edad = 20;                         // integer
    $promedio = 17.85;                  // double
    $nombreCompleto = "Carlos Mendoza"; // string
    $inscrito = true;                  // boolean

    echo "Nombre del Estudiante: " . $nombreCompleto . "<br>";
    echo "Edad: " . $edad . " años<br>";
    echo "Promedio de calificaciones: " . $promedio . "<br>";
    echo "Estado de inscripción activa: " . $inscrito . "<br>";
    ?>
</body>
</html>