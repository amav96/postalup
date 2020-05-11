<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<?php
	
	/* Connect To Database*/
	require_once ("../conexion.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query =$_REQUEST['query'];
	
	$tables="express";
	$campos="id,serie,id_orden,identificacion,nombre_cliente,direccion,localidad,cable_hdmi,cable_av,fuente,control_1,estado_rec,telefono2,empresa,emailcliente,otrosaccesorios";
	
	
	//include 'pagination.php'; //include pagination file
	//pagination variables
	
	//$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	//$per_page = intval($_REQUEST['per_page']); //cuantos registros quieres mostrar
	//$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	//$offset = ($page - 1) * $per_page;
	//Cuente el número total de filas en su tabla * /
	//$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere");
	//if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	//else {echo mysqli_error($con);}
	//$total_pages = ceil($numrows/$per_page);
	//consulta principal para recuperar los datos
		$acentos = $con->query("SET NAMES 'utf8'");
		
		$sql1="SELECT id,serie,id_orden,identificacion,nombre_cliente,direccion,localidad,cable_hdmi,cable_av,fuente,control_1,estado_rec,telefono2,empresa,emailcliente,otrosaccesorios
		FROM express WHERE 
		identificacion='$query' or serie='$query'";
		$resultado = $con->query($sql1);
		$row = mysqli_num_rows($resultado);
		
		if($row==0){
			
			echo "<div class='alert alert-danger' role='alert'>
			¡No existe cliente o verifique el dato ingresado!
		  </div>";
			
		}
		else {$query = mysqli_query($con,"SELECT $campos FROM  $tables where identificacion='$query' or serie='$query'");

			?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
					<th class='text-center'></th>
					<th class='text-center'></th>
					<th class='text-center'></th>
					<th class='text-center'></th>
                        <th>Serie </th>
						<th class='text-center'>Nro Orden</th>
						<th>Identificación </th>
                        <th>Nombre Cliente </th>
						<th>Dirección </th>
                        <th>Localidad </th>
						<th class='text-right'>Estado</th>
		                <th class='text-right'>Cable HDMI</th>
						<th class='text-center'>Cable AV</th>
						<th class='text-center'>Fuente</th>
						<th class='text-right'>Control</th>
						<th class='text-right'>Telefono</th>
						<th class='text-right'>Empresa</th>
						<th class='text-right'>Email</th>
						<th class='text-right'>Otros Accesorios</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	

							$id=$row['id'];
							$telefono2=$row['telefono2'];
							$serie=$row['serie'];
							$id_orden=$row['id_orden'];
							$identificacion=$row['identificacion'];
                            $nombre_cliente=$row['nombre_cliente'];
							$direccion=$row['direccion'];
                            $localidad=$row['localidad'];
							$estado_rec=$row['estado_rec'];
							$cable_hdmi=$row['cable_hdmi'];
							$cable_av=$row['cable_av'];
							$fuente=$row['fuente'];	
							$control_1=$row['control_1'];
							$empresa=$row['empresa'];
							$emailcliente=$row['emailcliente'];	
							$otrosaccesorios=$row['otrosaccesorios'];
												
							
						?>	<!--llamando a las funciones para que sirva los reemplazos-->
						<?php require_once('../funciones/caracteres.php');?>
						<tr class="<?php echo $text_class;?>">
						<td>
						<a href="https://api.whatsapp.com/send?phone=+549<?php telefonoWhats($telefonocorto); ?>&text=*<?php echo $identificacion ?>*%20*<?php echo $nombre_cliente ?>.*%20*Buenos*%20*d%C3%ADas.*%20*En*%20*la*%20*baja*%20*del*%20*servicio*%20*<?php echo $empresa ?>*%20*quedo*%20*pendiente*%20*de*%20*devolución*%20*el*%20*decodificador*%20*serie*%20*<?php echo $serie ?>,*%20*domicilio*%20*<?php echo $direccion ?>.*%20HOY%20ESTAMOS%20RETIRANDO%20EQUIPOS%20EN%20SU%20ZONA,%20*evitandole*%20*futuras*%20*solicitudes*%20*y*%20*esperas.*%0D%0A*Responda:*%0D%0A%20*1-%20RETIRAR*%20%0D%0A%20*2-%20LLAMAR*%20%0D%0A%20*3-%20DEVUELTO*%20%0D%0A%20*4-Posee%20el*%20deco%20*y*%20*desea*%20*retiro*%20*en*%20*otro*%20*d%C3%ADa,*%20*responda:*%20%20*REPACTAR*%20%20*INFO:*%20*pactado2@postalmarketing.com.ar*%20*o*%20*WP*%20*54911*%20*3874*%20*1529*%20*o*%20*11-3221-3774*%20Lu-Vie%20de%208%20a%2017%20.%20*MUCHAS*%20*GRACIAS*&source=&data=&app_absent="
						 target="_blank" class="fab fa-whatsapp" style="color:#2E9AFE;"></a>
						</td>
						<td>
						
						<a href="https://api.whatsapp.com/send?phone=+549<?php telefonoWhats($telefonocorto); ?>&text=*<?php echo $identificacion ?>*%20*<?php echo $nombre_cliente ?>*%20En%2015%20minutos%20aprox.%20Llego%20a%20tu%20domicilio.%20Hay%20gente%20para%20entregar%20el/los%20equipos?.%20*Avisame,*%20*no*%20*puedo*%20*demorarme*%20*ni*%20*esperar,*%20*tengo*%20*recorrido*%20*Programado.*&source=&data=&app_absent="
						 target="_blank" class="fas fa-car " style="color:#2E9AFE;"></a>
						</td>
						<td>
						
						<a href="mailto:<?php reemplazarEmail($correo); ?>?Subject=<?php echo $empresa ?>%20AVISO%201%20RECUPERACIÓN%20EQUIPOS%20&body=¡Hola!%20<?php echo $nombre_cliente ?>,%20Cliente%20<?php echo $identificacion ?>.%20Nos%20contactamos%20de%20<?php echo $empresa ?>%20,para%20la%20devolución%20del/los%20Equipos/s%20dados%20de%20Baja,%20una%20unidad%20esta%20proxima%20a%20su%20domicilio%20<?php echo $direccion ?>%20para%20retiro%20de%20los%20mismos.%20Solicitamos%20nos%20responda%20este%20mensaje%20si%20tiene%20los%20equipos%20<?php echo $serie ?>%20para%20retirar,%20caso%20contrario%20contactece%20por%20este%20medio%20al%20email%20pactado2@postalmarketing.com.ar%20o%20al%20WP%2054911%203874%201529%20o%2011-3221-3774"
						 target="_blank" class="fas fa-envelope" style="color:#2E9AFE;"></a>
						</td>
						<td>
				        <a href="#" data-target="#editProductModal" 
				        class="edit open-modal" data-toggle="modal" data-serie='<?php echo $serie?>'
						    data-id_orden='<?php echo $id_orden;?>'
						    data-identificacion="<?php echo $identificacion ?>"
						    data-direccion="<?php echo $direccion ?>"
						    data-estado_rec="<?php echo $estado_rec ?>"
						    data-cable_hdmi="<?php echo $cable_hdmi?>"
						    data-cable_av="<?php echo $cable_av?>"
						    data-fuente="<?php echo $fuente?>"
						    data-control_1="<?php echo $control_1?>"
							data-otrosaccesorios="<?php echo $otrosaccesorios?>"
						    data-id="<?php echo $id;?>">
							
																											  
								<i id="editar" class="fas fa-file-invoice-dollar" style="color:green;">
							</td>
							
							<td class='text-center'><?php echo $serie;?></td>
							<td class='text-center'><?php echo $id_orden;?></td>
							<td ><?php echo $identificacion;?></td>
                            <td ><?php echo $nombre_cliente;?></td>
							<td ><?php echo $direccion;?></td>
                            <td ><?php echo $localidad;?></td>
							<td ><?php echo $estado_rec;?></td>
							<td ><?php echo $cable_hdmi;?></td>
							<td class='text-center' ><?php echo $cable_av;?></td>
							<td class='text-right'><?php echo $fuente;?></td>
							<td class='text-right'><?php echo $control_1;?></td>
							<td class='text-center'><?php echo $telefono2;?></td>
							<td class='text-right'><?php echo $empresa;?></td>
							<td class='text-right'><?php echo $emailcliente;?></td>
							<td class='text-right'><?php echo $otrosaccesorios;?></td>
							
							
							
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
								<?php 
									
								?>
							</td>
						</tr>
				</tbody>			
			</table>
			
		</div>	

	
	
	<?php	
	}	
}
		
			
		
	
?>          
<script>
	$(".open-modal").click(function(){

$("input[name=edit_id_orden]").val($("#order").text());

});
</script>	  
