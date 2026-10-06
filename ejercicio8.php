<?php
define("PI", 3.14159);
$r = "";
$a = "";

if (isset($_POST['btnCalcular'])) {
    $r = (float)$_POST['r'];
    $a = PI * ($r ** 2); // A = PI * r^2
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 09 - Área del Círculo</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="card-title mb-0">Problema 09 - Área del Círculo</h5>
            </div>
            <div class="card-body">
                <form method="post" action="ejercicio8.php">
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Radio</label>
                        <div class="col-sm-8">
                            <input type="number" step="any" class="form-control" name="r" value="<?php echo $r; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Área</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $a; ?>" readonly>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="btnCalcular" class="btn btn-dark">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>