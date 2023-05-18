<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Mostrar Datos</title>
</head>

<body>
    <div class="container">
        <h1>Datos del Usuario</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];

            echo '<h3>Nombre: ' . $nombre . '</h3>';
            echo '<h3>Apellido: ' . $apellido . '</h3>';
            echo '<h3>Número de Cédula: ' . $cedula . '</h3>';
        }
        ?>
        <a href="./formulario-datos.php" class="btn btn-primary my-3">Volver</a>
    </div>
</body>

</html>