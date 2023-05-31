<?php
// Obtener los datos del formulario de registro
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Validar los datos (puedes agregar tus propias validaciones aquí)

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "tutorias");
// Verificar errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para insertar los datos del usuario en la tabla
$sql = "INSERT INTO usuarios (nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    // Registro exitoso, redirigir al formulario de inicio de sesión
    header("Location: login.php");
    exit();
} else {
    // Error al insertar los datos
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
