<?php
session_start();
require_once("../conexion.php"); //Contiene funcion que conecta a la base de datos
// escaping, additionally removing everything that could be (html/javascript-) code

sleep(2);

$id_orden = $_POST['id_orden'];
$serie = $_POST['serie'];
$identificacion = $_POST['identificacion'];
$cable_hdmi = $_POST['cable_hdmi'];
$cable_av = $_POST['cable_av'];
$fuente = $_POST['fuente'];
$control_1 = $_POST['control_1'];
$estado = $_POST['estado'];
$horario_rec = $_POST['horario_rec'];
$adicional = $_POST['adicional'];
$id_recolector = $_POST['id_recolector'];
$otrosaccesorios = $_POST['otrosaccesorios'];
$id_orden_pass = $_POST['id_orden_pass'];

$id_orden_pass = md5($id_orden_pass);

$sql1 = "SELECT identificacion
FROM express WHERE 
identificacion='$identificacion'";
$resultado = $con->query($sql1);
$fila = mysqli_num_rows($resultado);

if ($fila == 0) {

	echo 0;
} else {
	$sql = "INSERT INTO autorizar (id_recolector_2, id_orden, serie, identificacion, cable_hdmi, cable_av, fuente,control_1,estado_rec,horario_rec,
	adicional,otrosaccesorios,id_orden_pass) VALUES ('$id_recolector','$id_orden','$serie','$identificacion','$cable_hdmi','$cable_av','$fuente','$control_1','$estado','$horario_rec','$adicional','$otrosaccesorios','$id_orden_pass')";
	$insert = $con->query($sql) or die($mysqli->errno);
	echo 1;
	
	$consulta="SELECT id_orden_pass from autorizar where id_orden_pass='$id_orden_pass'";
	$result = $con->query($consulta);
	 $pass = mysqli_fetch_array($result);
	 $_SESSION["id_orden_pass"]=$pass;
	 //$_SESSION["id_orden_pass"]=$pass;
	 

	
} 


	


?>