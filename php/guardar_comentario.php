<?php
include("conexion.php"); // Incluye el archivo de conexión a la base de datos

// Obtiene los datos del comentario del formulario
$username = $_POST["username"];
$comment = $_POST["comment"];
// Obtiene la fecha y hora actual en el formato 'AAAA-MM-DD HH:MM:SS'
$date = date('Y-m-d H:i:s');

// Prepara la consulta SQL para insertar el comentario en la base de datos
$sql = "INSERT INTO comentarios (username, comment, date) VALUES ('$username', '$comment', '$date')";

// Ejecuta la consulta y verifica si se insertó correctamente
if (mysqli_query($conexion, $sql)) {
    echo "Comentario guardado correctamente"; // Puedes enviar una respuesta de éxito al cliente si es necesario
} else {
    echo "Error al guardar el comentario: " . mysqli_error($conexion);
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);

// Redirige a la página principal después de guardar el comentario
header("Location: ../index.php");
?>
?>
