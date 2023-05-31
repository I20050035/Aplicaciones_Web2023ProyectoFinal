<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "hospital_aplicaciones_web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $nombre=$_GET["txtNombre"]; 
    $Cantidad=$_GET["txtCantidad"]; 
    $Unidad=$_GET["txtUnidad"]; 
    $id=$_GET["id"];
   $sql = "UPDATE medicamento SET Nombre='".$nombre."',Cantidad='".$Cantidad."',Unidad='".$Unidad."' WHERE IdMedicamento  =". $id;
    $resultado = mysqli_query($conn,$sql);
header("Location:verTablaMedicamento.php"); 
mysqli_close( $conn );
   ?>

