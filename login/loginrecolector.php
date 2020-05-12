<?php
	session_start();

	if(!empty($_SESSION['login_user']))
{
header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel Recolector</title>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
   <!--fuente para iconos-->
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/estilos.css">
 <script>src="../js/jquery-3.4.1.min.js"</script>
  <script>src="../bootstrap/js/bootstrap.min.js"</script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href="../fonts/styles.css" rel="stylesheet">
 <link rel="stylesheet" href="../css/flexbox.css">
  
  <link rel="stylesheet" href="../css/logo.css">
  <link rel="stylesheet" href="../css/abscenter.css">
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="../js/validacion.js"></script>
  

</head>
<body>

<div class="text-center">
    	<div class="container">
			<div class="abs-center">
			<div id="box">
				<form class="form-horizontal" action="" method="POST" id="loginform">
					<section class="padre">
						<div class="card">
							<div class="card-body">
								<div class="form-group">
									<h1>Recolector</h1>
									<input type="text" class="form-control" name="username"  id="username" placeholder="Nro Recolector" required>
									<small class="form-text text-muted">Ingrese Usuario</small>
		  						</div>
								<div class="form-group">
								<input type="submit" class="loginBtn" value="Login" id="loginBtn"/>
								<div id="error"></div> 
								</div>
                			</div>
              			</div>
              		</section>
				</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>