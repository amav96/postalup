<!DOCTYPE html>
<html>
<head>
	<title>Panel Administración</title>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
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
</head>
<body>
<?php
SESSION_START();
	if(isset($_SESSION['administracion'])) { 
		header('location:../admin/administracion.php');
	}
	else { 
		?>

<div class="text-center">
    <div class="container">
	 <div class="abs-center">
             <form class="form-horizontal" action="../login/validar.php" method="POST">
             <section class="padre">
              <div class="card">
                <div class="card-body">
		             <div class="form-group">
		  
		
			 <h1>Administración</h1>
			 <label>Usuario</label>
			   <input type="text" class="form-control" name="usuario" id="usuario "  required>
				 </div>

				 <div class="form-group">
				 <label>Contraseña</label>
				 <input type="text" class="form-control" name="clave" id="clave " required>
				 <small class="form-text text-muted">Ingrese Datos</small>
		  </div>
			<div class="form-group">
			 
			  <button type="submit" class="btn btn-info">Ingresar</button>
		  
		             </div>
                </div>
              </div>
             
		</form>
		</div>
		</div>
		</div>
		
		<?php 
	}
?>
</body>
</html>