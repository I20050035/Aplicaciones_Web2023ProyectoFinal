<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id=$_GET["id"];
   $sql = "UPDATE receta_medica SET estatus= 0 WHERE IdReceta_Medica =". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTablaRecetaMedica.php"); 
mysqli_close( $conn );
   ?>