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

$("input[name=edit_id_orden]").val($("#order").text().trim());

});
</script>	  
