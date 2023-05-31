<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id=$_GET["id"];
   $sql = "UPDATE paciente SET estatus= 0 WHERE IdPaciente=". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTablaPaciente.php"); 
mysqli_close( $conn );
   ?>