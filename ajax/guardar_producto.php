<?php
	if (empty($_POST['serie'])){
		$errors[] = "Ingresa el numero del equipo.";
	} elseif (!empty($_POST['serie'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $id_orden = $_POST['id_orden'];
	$serie =$_POST['serie'];
	$identificacion = $_POST['identificacion'];
	$cable_hdmi =$_POST['cable_hdmi'];
	$cable_av = $_POST['cable_av'];
	$fuente= $_POST['fuente'];
	$control_1=$_POST['control_1'];
	$estado=$_POST['estado'];
	$horario_rec=$_POST['horario_rec'];
	$adicional=$_POST['adicional'];
	$id_recolector =$_POST['id_recolector'];
	$otrosaccesorios =$_POST['otrosaccesorios'];
	



	// REGISTER data into database
    $sql = "INSERT INTO autorizar(id_recolector_2, id_orden, serie, identificacion, cable_hdmi, cable_av,
	 fuente,control_1,estado_rec,horario_rec,adicional,otrosaccesorios) VALUES ('$id_recolector',
	 '$id_orden','$serie','$identificacion','$cable_hdmi','$cable_av',
	'$fuente','$control_1','$estado','$horario_rec','$adicional','$otrosaccesorios')"; 
    $insert = $con->query($sql) or die (mysqli_errno());
	// if product has been added successfully
	if($insert){
		echo 'registrado';
	}
	else {
		echo 'error';
	}

    if ($insert) {
        $messages[] = "El equipo ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>			