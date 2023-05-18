<?php
// Realizar la conexión a la base de datos (Asumiendo que ya has establecido la conexión)

// Función para limpiar los datos ingresados por el usuario
function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

// Obtener el valor del filtro desde el formulario
$filtro = limpiarDatos($_POST['filtro']);

// Verificar si se ha enviado el formulario de agregar
if (isset($_POST['agregar'])) {
    // Obtener los datos ingresados por el usuario
    $nombre = limpiarDatos($_POST['nombre']);
    $apellido = limpiarDatos($_POST['apellido']);
    $cedula = limpiarDatos($_POST['cedula']);

    // Realizar la consulta SQL para agregar un nuevo registro
    $sql = "INSERT INTO usuarios (nombre, apellido, cedula) VALUES ('$nombre', '$apellido', '$cedula')";

    // Ejecutar la consulta
    mysqli_query($conexion, $sql);

    // Redireccionar al formulario de filtro
    header("Location: index.php");
    exit();
}

// Verificar si se ha enviado el formulario de editar
if (isset($_POST['editar'])) {
    // Obtener los datos ingresados por el usuario
    $id = $_POST['id'];
    $nombre = limpiarDatos($_POST['nombre']);
    $apellido = limpiarDatos($_POST['apellido']);
    $cedula = limpiarDatos($_POST['cedula']);

    // Realizar la consulta SQL para actualizar el registro
    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', cedula='$cedula' WHERE id=$id";

    // Ejecutar la consulta
    mysqli_query($conexion, $sql);

    // Redireccionar al formulario de filtro
    header("Location: index.php");
    exit();
}

// Verificar si se ha enviado el formulario de eliminar
if (isset($_POST['eliminar'])) {
    // Obtener el ID del registro a eliminar
    $id = $_POST['id'];

    // Realizar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM usuarios WHERE id=$id";

    // Ejecutar la consulta
    mysqli_query($conexion, $sql);

    // Redireccionar al formulario de filtro
    header("Location: index.php");
    exit();
}

// Consulta SQL con filtro
$sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$filtro%' OR apellido LIKE '%$filtro%' OR cedula LIKE '%$filtro%'";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontraron resultados
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los resultados en una tabla
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nombre</th>';
    echo '<th>Apellido</th>';
    echo '<th>Cédula</th>';
    echo '<th>Acciones</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
}
    // Recorrer los resultados y mostrar cada fila en la tabla
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>';}
?>
