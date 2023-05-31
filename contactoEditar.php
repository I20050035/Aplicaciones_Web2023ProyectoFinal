<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $nombre=$_GET["txtNombre"]; 
    $apellidoPaterno=$_GET["txtApellidoPaterno"]; 
    $apellidoMaterno=$_GET["txtApellidoMaterno"]; 
    $especialidad=$_POST["txtespecialidad"];
    $telefono=$_POST["txttelefono"];
    $id=$_GET["id"];
   $sql = "UPDATE medico SET Nombre='".$nombre."',apellido_Paterno='".$apellidoPaterno."',apellido_Materno='".$apellidoMaterno."',Especialidad='".$especialidad."',Telefono='".$telefono."' WHERE IdMedico =". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTabla.php"); 
mysqli_close( $conn );
   ?>

