<html>
<form action="verTablaPaciente.php" method="GET">
<?php
$nombre=$_GET["txtNombre"]; 
$apellidoPaterno=$_GET["txtApellidoPaterno"]; 
$apellidoMaterno=$_GET["txtApellidoMaterno"]; 
$FechaNacimiento=$_GET["txtfecha"]; 
$Sexo=$_GET["txtsexo"]; 
$Telefono=$_GET["txttelefono"]; 
$Nss=$_GET["txtnss"]; 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_aplicaciones_web";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO paciente(Nombre,Apellido_Paterno,Apellido_Materno,Fecha_Nacimiento,Sexo,Telefono,Numero_Seguro_Social,estatus) VALUES ('".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$FechaNacimiento."','".$Sexo."','".$Telefono."','".$Nss."',1)";
if ($conn->query($sql) === TRUE) 
{
   $conn->close();
   header("Location:http://localhost:8081/hospital_web/verTablaPaciente.php");
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



