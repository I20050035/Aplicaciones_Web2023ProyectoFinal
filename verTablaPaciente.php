<!doctype html>
<html>
    <form>
    <head>
      <title>Mostrar tabla Paciente</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>
    <body>
    <script>
function confirmacion() 
    {
     var respuesta = confirm("¿Deseas realmente eliminar este registro?");
     if (respuesta == true) 
     {
      return true
     }
     else
     {
      return false;
     }
    }
</script>
<body>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-light">Tabla del Paciente</a>
    </div>
  </nav>
  <div class="col-md-11">
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
      
              <td class ="text-center">Nombre</td>
              <td class="text-center">ApellidoPaterno</td>
              <td class="text-center">ApellidoMaterno</td>
              <td class="text-center">Fecha_Nacimiento</td>
              <td class="text-center">Sexo</td>
              <td class="text-center">Telefono</td>
              <td class="text-center">Numero_Seguro_Social</td>
              <td class="text-center">Estatus</td>
              <?php
        require_once('config.inc.php');
        $conn = new mysqli($servername,$username,$password,$dbname);
        $consulta="select * from paciente where estatus = 1";
        $datos = $conn->query($consulta);
        while ($registro = mysqli_fetch_array($datos)) 
        {
         echo ' </tr>
          </thead>
          <tbody>
            <tr>
            
              
              <td><h7> '.$registro ['Nombre'].'</h7></td>
              <td><h7> '.$registro ['Apellido_Paterno'].'</h7></td>
              <td><h7> '.$registro ['Apellido_Materno'].'</h7></td>
              <td><h7> '.$registro ['Fecha_Nacimiento'].'</h7></td>
              <td><h7> '.$registro ['Sexo'].'</h7></td>   
              <td><h7> '.$registro ['Telefono'].'</h7></td>
              <td><h7> '.$registro ['Numero_Seguro_Social'].'</h7></td>
              <td><h7>'.$registro ['Estatus']. '

            
              
              <td><h2><form action="eliminarPaciente.php" method="GET"> 
              <input type="hidden" name="id" value="'.$registro ['IdPaciente'].'">
              <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirmacion()">
              </form></h7></td>
              <td><h2><form action="editarPaciente.php" method="POST"> 
              <input type="hidden" name="modificar" value="Modificar">
              <input type="hidden" name="idd" value="'.$registro ['IdPaciente'].'">
              <input class="btn btn-warning" type="submit" value="Modificar">
              <input type="hidden" name="txtnombre" value="'.$registro['Nombre'].'">
              <input type="hidden" name="txtapellidoPaterno" value="'.$registro['Apellido_Paterno'].'">
              <input type="hidden" name="txtapellidoMaterno" value="'.$registro['Apellido_Materno'].'">
              <input type="hidden" name="txtfecha" value="'.$registro['Fecha_Nacimiento'].'">
              <input type="hidden" name="txtsexo" value="'.$registro['Sexo'].'">
              <input type="hidden" name="txttelefono" value="'.$registro['Telefono'].'">
              <input type="hidden" name="txtnss" value="'.$registro['Numero_Seguro_Social'].'">
              </form></h2></td>
              <td></td>
            </tr>
          </tbody>'; 
        }
        $conn->close();
        ?>
            </tr>
          </thead>
        </table>
        <form action="frmInsertPaciente.php" method="get">
      <input class="btn btn-primary" type="submit" value="Registrar">
      <a href="Menu.php" class="btn btn-success">Regresar</a>
      <a href="generar_reportes_pacientes.php" class="btn btn-info">Generar Reporte</a>
    </form>
</html>