<html>
<form action="verTabla.php" method="GET">
<?php
$nombre=$_GET["txtNombre"]; 
$Cantidad=$_GET["txtCantidad"]; 
$Unidad=$_GET["txtUnidad"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_aplicaciones_web";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO medicamento(Nombre,Cantidad,Unidad) VALUES ('".$nombre."','".$Cantidad."','".$Unidad."')";
if ($conn->query($sql) === TRUE) 
{
   $conn->close();
   header("Location:http://localhost:8081/hospital_web/verTablaMedicamento.php");
   exit();
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}
?>
</form>
</html>



