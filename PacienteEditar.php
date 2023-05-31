<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $nombre=$_GET["txtNombre"]; 
    $apellidoPaterno=$_GET["txtApellidoPaterno"]; 
    $apellidoMaterno=$_GET["txtApellidoMaterno"]; 
    $fecha=$_POST["txtfecha"];
    $sexo=$_POST["txtsexo"];
    $telefono=$_POST["txttelefono"];
    $nss=$_POST["txtnss"];; 
    $id=$_GET["id"];
    $sql = "UPDATE paciente SET Nombre='".$nombre."',apellido_Paterno='".$apellidoPaterno."',apellido_Materno='".$apellidoMaterno."',Fecha_Nacimiento='".$fecha."',Telefono='".$telefono."' WHERE IdPaciente=". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTablaPaciente.php"); 
mysqli_close( $conn );
   ?>

