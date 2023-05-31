<?php
session_start();

// Conectarse a la base de datos
$conexion = new mysqli("localhost", "root", "", "hospital_aplicaciones_web");

// Verificar errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$Correo_Electronico = $_POST['Correo_Electronico'];
$Clave = $_POST['Clave'];

// Consultar el usuario en la base de datos
$sql = "SELECT IdUsuario, Nombre FROM usuario WHERE Correo_Electronico = '$Correo_Electronico' AND Clave = '$Clave'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    $_SESSION['IdUsuario'] = $fila['IdUsuario'];
    $_SESSION['Nombre'] = $fila['Nombre'];
    header("Location: menu.php");
} else {
    echo "Usuario o contraseña incorrectos.";
   
}
header("Location: index.php");
$conexion->close();
?>
