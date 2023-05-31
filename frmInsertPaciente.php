<!doctype html>
<html>
    <head>
      <title>Registro de Pacientes</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <form action="InsertRegistroPaciente.php" method="get">
        <!--Nombre-->
            <label for = "nombre">Nombre:</label><br>
            <input type="text" id="txtNombre" name="txtNombre"><br>
         <!--ApellidoPaterno-->    
            <label for = "apellidoPaterno">ApellidoPaterno:</label><br>
            <input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno"><br>
         <!--ApellidoMaterno-->    
            <label for = "apellidoMaterno">ApellidoMaterno:</label><br>
            <input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno"><br>
          <!--Fecha_Nacimiento -->   
            <label for = "Fecha_Nacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="txtfecha" name="txtfecha"><br>
           
            
             <!--Sexo-->  
            <label for="frutas">Selecciona el sexo:</label><br>
           <select  id="txtsexo" name="txtsexo">
           <option value="Hombre">Hombre </option>
           <option value="Mujer">Mujer </option><br>
           <!--Sexo-->   
           </select><br>
           


          <!--Telefono-->   
            <label for = "telefono">Telefono:</label><br>
            <input type="text" id="txttelefono" name="txttelefono"><br>
            <!--Nss-->   
            <label for = "nss">Numero del seguro social :</label><br>
            <input type="text" id="txtnss" name="txtnss"><br><br>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </center>
        </form>
    </body>
</html>

