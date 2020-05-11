<?php
	
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
    // escaping, additionally removing everything that could be (html/javascript-) code
    
sleep(2);

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
	
$sql1="SELECT identificacion
FROM express WHERE 
identificacion='$identificacion'";
$resultado = $con->query($sql1);
$fila = mysqli_num_rows($resultado);

if($fila==0){
    
    echo 0;
    
}
else {
	$sql = "INSERT INTO autorizar (id_recolector_2, id_orden, serie, identificacion, cable_hdmi, cable_av, fuente,control_1,estado_rec,horario_rec,
	adicional,otrosaccesorios) VALUES ('$id_recolector','$id_orden','$serie','$identificacion','$cable_hdmi','$cable_av','$fuente','$control_1','$estado','$horario_rec','$adicional','$otrosaccesorios')";
    $insert = $con->query($sql) or die (mysqli_erno());
    echo 1;
}

    
    ?>

