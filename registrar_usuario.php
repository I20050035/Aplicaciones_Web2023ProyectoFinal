<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
    <h1 class="text-center">Registro</h1>
        
        <form method="POST" action="registrarusuario.php">
            <div class="form-group">
            <div class="text-center">
        <img src="image/login.png" height="150" width="150" class="rounded" alt="...">
        </div>
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="Usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password"> Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="index.php" class="btn btn-danger">Regresar</a>
        </form>
      
       
    </div>
</body>

</html>
