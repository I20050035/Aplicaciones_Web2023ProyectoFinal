<html>
<form action="verTabla.php" method="GET">
<?php
$nombre=$_GET["txtNombre"]; 
$apellidoPaterno=$_GET["txtApellidoPaterno"]; 
$apellidoMaterno=$_GET["txtApellidoMaterno"]; 
$telefono=$_GET["txtTelefono"]; 
$especialidad=$_GET["txtEspecialidad"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_aplicaciones_web";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO medico(Nombre,Apellido_Paterno,Apellido_Materno,Especialidad,Telefono) VALUES ('".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$especialidad."','".$telefono."')";
if ($conn->query($sql) === TRUE) 
{
   $conn->close();
   header("Location:http://localhost:8081/hospital_web/verTabla.php");
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



