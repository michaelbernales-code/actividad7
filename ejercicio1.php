<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Ficha de Producto</title>
</head>
<body>
    <h3>Ficha de Producto</h3>
    <?php
    $codigo = 1001;                 // Tipo integer
    $precio = 499.99;               // Tipo double
    $nombre = "Laptop Gamer";       // Tipo string
    $disponible = true;             // Tipo boolean

    echo "Código de producto: " . $codigo . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Precio: S/ " . $precio . "<br>";
    echo "Disponible en stock: " . $disponible . "<br>";
    ?>
</body>
</html>