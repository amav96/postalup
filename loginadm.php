<!DOCTYPE html>
<html>
<head>
	<title>Panel Administración</title>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="../css/estiloslog.css">
	<link rel="stylesheet" href="../css/logo.css">
</head>
<body>
<?php
SESSION_START();
	if(isset($_SESSION['administracion'])) { 
		header('location:../admin/administracion.php');
	}
	else { 
		?>

		<form action="../login/validar.php" method="post">
				<h2>Panel Administración</h2>
				<input type='text' placeholder='&#128272; usuario' name='usuario'>
				<input type='password' placeholder='&#128273; clave' name='clave'>
				<input type='submit' value='Ingresar'>
		</form>
		
		<?php 
	}
?>
</body>
</html>