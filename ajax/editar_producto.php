<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $serie = $_POST["edit_serie"];
	$cable_hdmi = $_POST["edit_cable_hdmi"];
	$cable_av = $_POST["edit_cable_av"];
    $fuente = $_POST["edit_fuente"];
	$control_1 = $_POST["edit_control_1"];
	$id_orden = $_POST["edit_id_orden"];
	$estado_rec = $_POST["edit_estado_rec"];
	$id=$_POST['edit_id'];
	$horario_rec=$_POST['horario_rec'];
	$id_recolector_password = $_POST['id_recolector_password'];
	$id_recolector_2 = $_POST['id_recolector_2'];
	$otrosaccesorios = $_POST['edit_otrosaccesorios'];

	
	$id_recolector_password = password_hash($id_recolector_password, PASSWORD_DEFAULT);
	// UPDATE data into database
    $sql = "UPDATE express SET serie='".$serie."',
	                           id_orden='".$id_orden."',
							   estado_rec='".$estado_rec."',
							   cable_hdmi='".$cable_hdmi."',
							   cable_av='".$cable_av."',
                               fuente='".$fuente."',
							   control_1='".$control_1."',
							   otrosaccesorios='".$otrosaccesorios."',
							   horario_rec='".$horario_rec."',
							   password_rec='".$id_recolector_password."',
							   id_recolector_2='".$id_recolector_2."'
						   WHERE id='".$id."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El equipo ha sido recibo con éxito.";
    } else {
        $errors[] = "Lo sentimos, no se recibio el equipo. Por favor, regrese y vuelva a intentarlo.";
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