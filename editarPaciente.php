<?php
        $id=$_POST["idd"];
        $nombre=$_POST["txtnombre"];
        $apellidoPaterno=$_POST["txtapellidoPaterno"];
        $apellidoMaterno=$_POST["txtapellidoMaterno"];
        $fecha=$_POST["txtfecha"];
        $sexo=$_POST["txtsexo"];
        $telefono=$_POST["txttelefono"];
        $nss=$_POST["txtnss"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hospital_aplicaciones_web";
        $conn = new mysqli($servername,$username,$password,$dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $consulta= "SELECT * FROM paciente where estatus = 1";
$result = mysqli_query($conn,$consulta);
  if(!$result) 
  {
      echo "No se ha podido realizar la consulta";
  }
$colum = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
    <head>
      <title>Registro de contacto</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <form class="formulario" method="get" action="PacienteEditar.php">
    <center>
    <h1>Modifica los datos del Registro del Paciente</h1>
            <?php
            echo '<input type="hidden" name="id" value="'.$id.'"';
             ?>
            <?php
            echo '<label for = "nombre">Nombre:</label><br>
            <input type="text" id="txtNombre" name="txtNombre" value ="'.$nombre.'"><br>';  
            ?>    
            <?php
            echo '<label for = "apellido paterno">Apellido Paterno:</label><br>
            <input type="text" id="txtApellidoPaterno" name="txtApellidoPaterno" value ="'.$apellidoPaterno.'"><br>';  
            ?> 
            <?php
            echo '<label for = "apellido materno">Apellido Materno:</label><br>
            <input type="text" id="txtApellidoMaterno" name="txtApellidoMaterno" value ="'.$apellidoMaterno.'"><br>';  
            ?>  
             <?php
            echo '<label for = "fecha">Fecha:</label><br>
            <input type="fecha" id="txtfecha" name="txtfecha" value ="'.$fecha.'"><br>';  
            ?> 
             <?php
              echo'   <label for="frutas">Selecciona el sexo:</label><br>
                  <select  id="txtsexo" name="txtsexo" value ="'.$sexo.'">
                  <option value="Hombre">Hombre </option>
                  <option value="Mujer">Mujer </option><br>
                  <!--Sexo-->   
                  </select><br>';
             
            ?>  
              <?php
            echo '<label for = "telefono">Telefono:</label><br>
            <input type="text" id="txttelefono" name="txttelefono" value ="'.$telefono.'"><br>';  
            ?> 
              <?php
            echo '<label for = "nss">Numero Seguro Social:</label><br>
            <input type="text" id="txtnss" name="txtnss" value ="'.$nss.'"><br>';  
            ?>  
          
                
         <a class="bx bx-log-out" href="PacienteEditar.php"></a>
         <input type="submit" value="Modificar" class="button">
         </center>
    </form>
</body>
</html>

