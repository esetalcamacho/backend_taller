<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>

<body>
    <div class="container">
        <h1>Calculadora</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="num1" class="form-label">Número 1</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Número 2</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <select class="form-select" id="operacion" name="operacion">
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
            <div class="text-end">
                <a href="index.php" class="btn btn-primary">Volver al inicio</a>
            </div>


        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = 0;

            switch ($operacion) {
                case 'sumar':
                    $resultado = $num1 + $num2;
                    break;
                case 'restar':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicar':
                    $resultado = $num1 * $num2;
                    break;
                case 'dividir':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error: No se puede dividir por cero</div>';
                    }
                    break;
                default:
                    echo '<div class="alert alert-danger" role="alert">Error: Operación no válida</div>';
                    break;
            }

            if ($operacion != 'dividir' || $num2 != 0) {
                echo '<div class="alert alert-success" role="alert">El resultado es: ' . $resultado . '</div>';
            }
        }
        ?>
    </div>
</body>

</html>