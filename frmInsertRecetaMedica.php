<?php
//conexion
require "config.inc.php";
//s
$selectservicio = mysqli_query($conectar,"SELECT IdPaciente,Nombre  FROM paciente");
$selectmedico = mysqli_query($conectar,"SELECT IdMedico,Nombre  FROM medico");
$selectmedicamento = mysqli_query($conectar,"SELECT IdMedicamento,Nombre  FROM medicamento");

?>



<!doctype html>
<html>
    <head>
      <title>Registro de Receta</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <center>
        <form action="InsertRegistrorecetamedica.php" method="get">
            <label for = "Descripción">Descripción:</label><br>
            <input type="text" id="txtDescripción" name="txtDescripción"><br>
          
            <label for = "fecha">Fecha:</label><br>
            <input type="fecha" id="txtfecha" name="txtfecha"><br><br>
           
            <label for="cmbPaciente" class="form-label">Paciente</label>
                                   <select name="paciente" id="SelectPaciente">
			                        	<?php 
			                          	while($datos = mysqli_fetch_array($selectservicio))
                                  {
                                    ?>
			                              <option value="<?php echo $datos['IdPaciente']?>"> <?php echo $datos['Nombre']?> </option>
			                              <?php
		  	                          }
			                              ?>
	                                	</select>
                                        <br>

           <label for="cmbMedico" class="form-label">Medico</label>
                                   <select name="medico" id="SelectMedico">
			                        	<?php 
			                          	while($datos = mysqli_fetch_array($selectmedico))
                                  {
                                    ?>
			                              <option value="<?php echo $datos['IdMedico']?>"> <?php echo $datos['Nombre']?> </option>
			                              <?php
		  	                          }
			                              ?>
	                                	</select>
                                        <br>
                                        <label for="cmbMedicamento" class="form-label">Medicamento</label>
                                   <select name="medicamento" id="SelectMedicamento">
			                        	<?php 
			                          	while($datos = mysqli_fetch_array($selectmedicamento))
                                  {
                                    ?>
			                              <option value="<?php echo $datos['IdMedicamento']?>"> <?php echo $datos['Nombre']?> </option>
			                              <?php
		  	                          }
			                              ?>
	                                	</select>
                                        <br>
           
            <input class="btn btn-primary" type="submit" value="Enviar">
        </center>
        </form>
    </body>
</html>

