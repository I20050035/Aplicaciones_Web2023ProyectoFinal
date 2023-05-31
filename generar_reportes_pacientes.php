<?php
require_once('tcpdf/tcpdf.php');

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "hospital_aplicaciones_web");
// Verificar errores de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consultar la tabla de usuarios
$sql = "SELECT * FROM paciente where estatus = 1";
$resultado = $conexion->query($sql);

// Crear el contenido del reporte en HTML
$html = '<h1 style="color: #FF0000;">Reporte de Pacientes</h1>';
$html .= '<table style="border-collapse: collapse;">';
$html .= '<tr><th style="background-color: #CCCCCC;">Nombre</th><th style="background-color: 
#CCCCCC;">Ap.Paterno</th><th style="background-color:
#CCCCCC;">Ap.Materno</th><th style="background-color:
#CCCCCC;">Fecha</th><th style="background-color:
#CCCCCC;">Sexo</th><th style="background-color: 
#CCCCCC;">Telefono</th><th style="background-color: 
#CCCCCC;">Nss</th></tr>';

while ($row = $resultado->fetch_assoc()) {
    $html .= '<tr>';
    $html .= '<td>' . $row['Nombre'] . '</td>';
    $html .= '<td>' . $row['Apellido_Paterno'] . '</td>';
    $html .= '<td>' . $row['Apellido_Materno'] . '</td>';
    $html .= '<td>' . $row['Fecha_Nacimiento'] . '</td>';
    $html .= '<td>' . $row['Sexo'] . '</td>';
    $html .= '<td>' . $row['Telefono'] . '</td>';
    $html .= '<td>' . $row['Numero_Seguro_Social'] . '</td>';
    $html .= '</tr>';

}

$html .= '</table>';

// Cerrar la conexión a la base de datos
$conexion->close();

// Generar el archivo PDF con TCPDF
$pdf = new TCPDF();
$pdf->SetAutoPageBreak(true, 10);
$pdf->AddPage();
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('reporte_pacientes.pdf', 'I');
?>
