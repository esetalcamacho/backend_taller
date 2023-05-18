<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Edad</title>
</head>

<body>
    <div class="container">
        <h1>Verificación de Edad</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <button type="submit" class="btn btn-primary">Verificar</button>
        </form>
        <div class="text-end">
            <a href="index.php" class="btn btn-primary">Volver al inicio</a>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $edad = $_POST['edad'];

            if ($edad < 18) {
                echo '<div class="alert alert-danger" role="alert">No es mayor de edad</div>';
            } else {
                echo '<div class="alert alert-success" role="alert">Es mayor de edad</div>';
            }
        }
        ?>
    </div>
</body>

</html>