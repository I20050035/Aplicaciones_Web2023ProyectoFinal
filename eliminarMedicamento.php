<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id=$_GET["id"];
   $sql = "UPDATE medicamento SET estatus= 0 WHERE IdMedicamento =". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTablaMedicamento.php"); 
mysqli_close( $conn );
   ?>