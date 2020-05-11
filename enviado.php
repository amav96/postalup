<?php
//include 'conexion.php';
SESSION_START();

if(!isset($_SESSION['logged_user'])){ 
    header('location:login/loginrecolector.php');
  } if(!isset($_SESSION['logged_user'])){
    header('location:login/loginrecolector.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel Recolector</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/estilos.css">
  <script>src="js/jquery-3.4.1.min.js"</script>
  <script>src="bootstrap/js/bootstrap.min.css"</script>
  
  <link href="fonts/styles.css" rel="stylesheet">
 <link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" href="css/flexbox.css">
 
 </head>
<body>
  <div>
  <header class="header">
    <div class="contenedor">
      <img src="img/logo.png" class="info__logo">
      
      <span class="icon-menu" id="btn-menu"></span>

      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link select" href="datoscliente.php">SEGUIR OPERANDO</a></li>
        <li class="menu__item"><a class="menu__link select" href="cerrar_sesion.php">TERMINAR</a></li>
 


      </ul>
    </nav>
</div>
</header>
<div style="text-align:center;";>       
<h1> ¡Enviado exitosamente! </h1>
</div>
<div class="text-center">
    	<div class="container">
			<div class="abs-center">
      <div class="form-group">
      <form class="form-horizontal" action="datoscliente.php" method="POST">
      <input type="submit" name="seguir" value="Volver Atras" class="btn btn-info"> 
      </form>
      </div>
      </div>
     </div>
    </div>  
    <div class="text-center">
    	<div class="container">
			<div class="abs-center">
      
      <form class="form-horizontal" action="cerrar_sesion.php" method="POST">
      <input type="submit" name="seguir" value="Finalizar" class="btn btn-info"> 
      </form>
      </div>
     </div>
    </div>  
<script src="js/script.js"></script>
	<script src="js/menu.js"></script>

</body>
</html                            		                            