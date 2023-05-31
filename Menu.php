<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Hospital</title>

    <style>

      *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      header{
        background-color: #F9F8FC;
      }

      #logo{
        margin: auto;
        height: 250px;
        width: 320px;
        text-align: center;
      }

      #logo h1{
         font-family: 'Pacifico', cursive;
         font-size: 58px;
       }

     nav{
       height: 60px;
       background-color:#355cfa;
       text-align: center;
     }

     nav ul{
        list-style: none;
        display: inline-block;
        padding:18px;
     }

     nav ul li{
         float: left;
         margin-top: 20px;
     }

     nav ul li a {
         color: white;
         font-weight: bold;
         text-decoration: none;
         font-size: 20px;
         padding: 18px;
     }

     nav ul li a:hover{
       background-color: #9293b3;
     }

   </style>

 </head>

 <body>

  <header>
     <div id="logo">
        <img src="image/principal.png" width="100" height="100" alt="Hospital">
        <h1>Hospital</h1>
     </div>
     <nav>
       <ul>
         <li><a href="verTablaPaciente.php">Paciente</a></li>
         <li><a href="verTabla.php">Medico</a></li>
         <li><a href="verTablaMedicamento.php">Medicamento</a></li>
         <li><a href="verTablaRecetaMedica.php">Receta Medica</a></li>
         <li><a href="verTablaCitaMedica.php">Cita Medica </a></li>
         <li><a href="logout.php">Cerrar session</a></li>
       </ul>
     </nav>
   </header>
 </body>
</html>