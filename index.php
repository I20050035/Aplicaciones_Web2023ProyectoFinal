<?php
session_start();
if (isset($_SESSION['IdUsuario'])) {
    header("Location: menu.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Hospital Web </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Iniciar sesión</h1>
        <form action="login.php" method="POST">
        <div class="text-center">
        <img src="image/login.png" height="150" width="150" class="rounded" alt="...">
        </div>
        
        <div class="form-group">
                <label for="Correo_Electronico">Correo_Electronico:</label>
                <input type="text" class="form-control" id="Correo_Electronico" name="Correo_Electronico" required>
            </div>
            <div class="form-group">
                <label for="Clave">Clave:</label>
                <input type="password" class="form-control" id="Clave" name="Clave" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            <br>
           
        </form>
   
        <p>No tienes una cuenta? <a href="registrar_usuario.php">Regístrate aquí</a></p>
    </div>
</body>
</html>
