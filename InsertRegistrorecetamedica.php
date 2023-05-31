<html>
<form action="verTablaRecetaMedica.php" method="GET">
<?php
$Descripcion=$_GET["txtDescripción"]; 
$Fecha=$_GET["txtfecha"]; 
$Paciente=$_GET["paciente"]; 
$Medico=$_GET["medico"]; 
$Medicamento=$_GET["medicamento"]; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_aplicaciones_web";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO receta_medica(Descripcion,Fecha,IdPaciente,IdMedico,IdMedicamento) VALUES ('".$Descripcion."','".$Fecha."','".$Paciente."','".$Medico."','".$Medicamento."')";

if ($conn->query($sql) === TRUE) 
{
   $conn->close();
   header("Location:http://localhost:8081/hospital_web/verTablaRecetaMedica.php");
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



