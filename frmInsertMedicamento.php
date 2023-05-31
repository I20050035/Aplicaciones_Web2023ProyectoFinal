<!doctype html>
<html>
    <head>
      <title>Registro de contacto</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <form action="InsertMedicamento.php" method="get">
            <label for = "nombre">Nombre:</label><br>
            <input type="text" id="txtNombre" name="txtNombre"><br>
          
            <label for = "Cantidad">Cantidad:</label><br>
            <input type="text" id="txtCantidad" name="txtCantidad"><br>
           
            <label for = "Unidad">Unidad:</label><br>
            <input type="text" id="txtUnidad" name="txtUnidad"><br>
           
           
            <input class="btn btn-primary btn-lg" type="submit" value="Enviar">
        </center>
        </form>
    </body>
</html>

