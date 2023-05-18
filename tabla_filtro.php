<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Tabla filtro</title>
</head>

<body>
    <?php
    $host = 'localhost';
    $db = 'mi_proyecto';
    $user = 'root';
    $password = '';

    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="container mt-4">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <h2>Filtro de Usuarios</h2>
                <input type="text" id="filtro" class="form-control mb-3" placeholder="Escribe un nombre, apellido o cédula" autocomplete="off">

                <table class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cédula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['apellido']; ?></td>
                                <td><?php echo $row['cedula']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <div class="text-end">
                    <a href="index.php" class="btn btn-primary">Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>