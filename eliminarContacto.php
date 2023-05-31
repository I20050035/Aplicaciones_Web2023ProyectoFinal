<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id=$_GET["id"];
   $sql = "UPDATE medico SET estatus= 0 WHERE IdMedico=". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTabla.php"); 
mysqli_close( $conn );
   ?>