<?php
$n1 = "";
$n2 = "";
$s = "";

if (isset($_POST['btnCalcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $s = $n1 + $n2;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 01 - Suma</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container" style="max-width: 450px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Problema 01 - Suma de Números</h5>
            </div>
            <div class="card-body">
                <form method="post" action="ejercicio6.php">
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Número 1</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="n1" value="<?php echo $n1; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Número 2</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="n2" value="<?php echo $n2; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-form-label">Suma</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $s; ?>" readonly>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" name="btnCalcular" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>