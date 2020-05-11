<?php
	/**
	 * 
	 */
	class recolectores
	{
		private $table='recolectores';
		private $table2='provincias';
		private $table3='departamentos';
		private $actio='recolector.php';

		function cantidad($c1,$rid){
			$inf=0;
			if ($rid==1) {
				$sql="SELECT count(*) AS cantidad FROM ".$this->table." WHERE status <> 2 ;";
			}else{
				$sql="SELECT count(*) AS cantidad FROM ".$this->table." WHERE status = 1 ;";
			}
			$res=mysqli_query($c1, $sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				if ($res->num_rows > 0) {
					while ($row = mysqli_fetch_array($res)) {
						$inf = $row['cantidad'];
					}
				}
				mysqli_free_result($res);
			}
			mysqli_close($c1);
			return $inf;
		}
		function cbo($c1){
			$inf="";
			$sql="SELECT id_cli, nombre_cli FROM ".$this->table." ;";
			$inf.='<option value="">Seleccione nombre_cli:</option>';
			$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				while ($row = mysqli_fetch_array($res)) {
					$inf.='<option value="'.base64_encode($row['id_cli']).'">'.$row['nombre_cli'].'</option>';
				}
			}else{
				$inf.='<option value="">Error: '.$_SESSION['Mysqli_Error'].'</option>';
			}
			mysqli_close($c1);
			return $inf;
		}
		function cbo2($c1,$rid){
			$inf="";
			if ($rid==4 || $rid==1) {
				$sql="SELECT `id_cli`, nombre_cli FROM `".$this->table."` WHERE `status`=1;";
			}else{
				$sql="SELECT `id_cli`, nombre_cli FROM `".$this->table."` WHERE `status`=1;";
			}
			$inf.='<option value="">Seleccione nombre_cli:</option>';
			$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				while ($row = mysqli_fetch_array($res)) {
					$id_cli = $row['id_cli'];
					$nombre_cli = $row['nombre_cli'];
					$inf.='<option value="'.$id_cli.'">'.$nombre_cli.'</option>';
				}
			}else{
				$inf.='<option value="">Error: '.$_SESSION['Mysqli_Error'].'</option>';
			}
			mysqli_close($c1);
			return $inf;
		}
		function cbo3($c1){
			$inf="";
			$sql="SELECT di.id_cli, di.idprovincia, pr.iddepartamento, concat(dp.departamento,', ',pr.provincia,', ',di.nombre_cli) AS lugar FROM ".$this->table." di INNER JOIN ".$this->table2." pr ON di.idprovincia=pr.id_cli INNER JOIN ".$this->table3." dp ON pr.iddepartamento=dp.id_cli WHERE di.status=1 ORDER BY lugar ASC;";
			$inf.='<option value="">Seleccione Ubicación:</option>';
			$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = mysqli_error($c1);
			if ($res) {
				while ($row = mysqli_fetch_array($res)) {
					$id_cli = $row['iddepartamento'].'||'.$row['idprovincia'].'||'.$row['id_cli'];
					$inf.='<option value="'.$id_cli.'">'.$row['lugar'].'</option>';
				}
			}else{
				$inf.='<option value="">Error: '.$_SESSION['Mysqli_Error'].'</option>';
			}
			mysqli_close($c1);
			return $inf;
		}
		function listar($c1,$rid){
			$inf="";$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					$inf.='<th>N°</th>';
					$inf.='<th>id_cli</th>';
					$inf.='<th>Provincia</th>';
					$inf.='<th>nombre_cli</th>';
					$inf.='<th>Creado</th>';
					$inf.='<th>Estado</th>';
					$inf.='<th>Mantenimiento</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$inf.='<tbody>';
				if ($rid==4 || $rid==1) {
					$sql="SELECT d.id_cli, d.idprovincia, (p.provincia) AS NProvin, d.nombre_cli, d.created_at, d.updated_at, d.status FROM `".$this->table."` d INNER JOIN `".$this->table2."` p ON d.idprovincia=p.id_cli WHERE d.status <> 2;";
				}else{
					$sql="SELECT d.id_cli, d.idprovincia, (p.provincia) AS NProvin, d.nombre_cli, d.created_at, d.updated_at, d.status FROM `".$this->table."` d INNER JOIN `".$this->table2."` p ON d.idprovincia=p.id_cli WHERE d.status = 1;";
				}
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ( $row = mysqli_fetch_array($res) ) {
							$id_cli = $row['id_cli'];
							$idprovincia = $row['idprovincia'];
							$NProvin = $row['NProvin'];
							$nombre_cli = $row['nombre_cli'];
							$created_at = $row['created_at'];
							$updated_at = $row['updated_at'];
							$status = $row['status'];

							$datos = base64_encode($id_cli)."||".base64_encode($idprovincia)."||".$nombre_cli."||".$created_at."||".$updated_at."||".$status;
							$datos2 = base64_encode($id_cli);

							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$id_cli.'</td>';
								$inf.='<td>'.$NProvin.'</td>';
								$inf.='<td>'.$nombre_cli.'</td>';
								$inf.='<td>'.$created_at.'</td>';

								if ($status==1) { 
									$inf.='<td><a href="'.$this->actio.'?val='.base64_encode($id_cli).'&meth=des" class="btn btn-primary">Activo</a></td>'; 
								}else if($status==2){
									$inf.='<td><a href="'.$this->actio.'?val='.base64_encode($id_cli).'&meth=act" class="btn btn-danger">Eliminado</a></td>'; 
								}else{
									$inf.='<td><a href="'.$this->actio.'?val='.base64_encode($id_cli).'&meth=act" class="btn btn-warning">Inactivo</a></td>'; 
								}
								
								$inf.='<td>';
									$inf .= "<button type='button' class='btn btn-warning' data-toggle='modal' data-target='#editar' onclick='editar(".'"'.$datos.'"'.");' >";
										$inf .= "<i class='fa fa-edit' ></i> Editar";
									$inf .= "</button> ";
									$inf .= "<button type='button' class='btn btn-info' data-toggle='modal' data-target='#vermas' onclick='vermas(".'"'.$datos.'"'.");' >";
										$inf .= "<i class='fa fa-eye' ></i> Ver más";
									$inf .= "</button> ";
									if ($rid==4 || $rid==1) {
										$inf .= "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#eliminar' onclick='eliminar(".'"'.$datos2.'"'.");' >";
											$inf .= "<i class='fa fa-trash' ></i> Eliminar";
										$inf .= "</button>";
									}
								$inf.='</td>';
							$inf.='</tr>';

							$n++;
						}
						mysqli_free_result($res);
					}else{
						$inf .= '<tr><td colspan="6"><div class="alert alert-warning">No se encontrarón registros</div></td></tr>';
					}
				}else{
					$inf .= '<tr><td colspan="6"><div class="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'.</div></td></tr>';
				}
			$inf.='</tbody>';

			mysqli_close($c1);

			return $inf;
		}
		function exportar($c1,$rid){
			$inf="";$n=1;

			$inf.='<thead>';
				$inf.='<tr>';
					$inf.='<th>N°</th>';
					$inf.='<th>id_cli</th>';
					$inf.='<th>País</th>';
					$inf.='<th>nombre_cli</th>';
					$inf.='<th>Creado</th>';
					$inf.='<th>Estado</th>';
				$inf.='</tr>';
			$inf.='</thead>';

			$inf.='<tbody>';
				if ($rid==4 || $rid==1) {
					$sql="SELECT d.id_cli, d.idprovincia, (p.provincia) AS NProvin, d.nombre_cli, d.created_at, d.updated_at, d.status FROM `".$this->table."` d INNER JOIN `".$this->table2."` p ON d.idprovincia=p.id_cli WHERE d.status <> 2;";
				}else{
					$sql="SELECT d.id_cli, d.idprovincia, (p.provincia) AS NProvin, d.nombre_cli, d.created_at, d.updated_at, d.status FROM `".$this->table."` d INNER JOIN `".$this->table2."` p ON d.idprovincia=p.id_cli WHERE d.status = 2;";
				}
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ( $row = mysqli_fetch_array($res) ) {
							$id_cli = $row['id_cli'];
							$idprovincia = $row['idprovincia'];
							$NProvin = $row['NProvin'];
							$nombre_cli = $row['nombre_cli'];
							$created_at = $row['created_at'];
							$updated_at = $row['updated_at'];
							$status = $row['status'];

							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$id_cli.'</td>';
								$inf.='<td>'.$NProvin.'</td>';
								$inf.='<td>'.$nombre_cli.'</td>';
								$inf.='<td>'.$created_at.'</td>';
								if ($status==1) { 
									$inf.='<td><a class="pd-setting">Activo</a></td>'; 
								}else{ 
									$inf.='<td><a class="ds-setting">Inactivo</a></td>'; 
								}
							$inf.='</tr>';

							$n++;
						}
						mysqli_free_result($res);
					}else{
						$inf .= '<tr><td colspan="5"><div class="alert alert-warning">No se encontrarón registros</div></td></tr>';
					}
				}else{
					$inf .= '<tr><td colspan="5"><div class="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'.</div></td></tr>';
				}
			$inf.='</tbody>';

			mysqli_close($c1);

			return $inf;
		}
		function add($c1,$idprovincia,$nombre_cli,$created_at,$uid,$status){
			function validarAdd($idprovincia,$nombre_cli){
				$er=1;
				if(is_null($idprovincia)){ $er=0; }
				if(is_null($nombre_cli)){ $er=0; }
				return $er;
			}
			if (validarAdd($idprovincia,$nombre_cli)==1) {
				$sql="INSERT INTO `".$this->table."` (`idprovincia`, `nombre_cli`, `created_at`, `id_created`, `status`) VALUES ('".$idprovincia."', '".$nombre_cli."', '".$created_at."','".$uid."',".$status.");";
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$inf="add";
				}else{
					$inf="noadd";
				}
			}else{
				$inf="null";
			}
			mysqli_close($c1);
			return $inf;
		}
		function edit($c1,$id_cli,$idprovincia,$nombre_cli,$updated_at,$uid,$status){
			function validarEdit($id_cli,$idprovincia,$nombre_cli){
				$er=1;
				if(is_null($id_cli)){ $er=0; }
				if(is_null($idprovincia)){ $er=0; }
				if(is_null($nombre_cli)){ $er=0; }
				return $er;
			}
			if (validarEdit($id_cli,$idprovincia,$nombre_cli)==1) {
				$sql="UPDATE `".$this->table."` SET `idprovincia`=".$idprovincia.", `nombre_cli`='".$nombre_cli."', `updated_at`='".$updated_at."',`id_updated`='".$uid."',`status`=".$status." WHERE `id_cli` = ".$id_cli." ;";
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$inf="edit";
				}else{
					$inf="noedit";
				}
			}else{
				$inf="null";
			}
			mysqli_close($c1);
			return $inf;
		}
		function drop($c1,$id_cli,$drop_at,$uid){
			function validarDrop($id_cli){
				$er=1;
				if(is_null($id_cli)){ $er=0; }
				return $er;
			}
			if (validarDrop($id_cli)==1) {
				$sql="UPDATE `".$this->table."` SET `drop_at`='".$drop_at."',`id_drop`='".$uid."',`status`=2 WHERE `id_cli` = ".$id_cli." ;";
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$inf="drop";
				}else{
					$inf="nodrop";
				}
			}else{
				$inf="null";
			}
			mysqli_close($c1);
			return $inf;
		}
		function activar($c1,$id_cli,$updated_at,$uid){
			function validarDrop($id_cli){
				$er=1;
				if(is_null($id_cli)){ $er=0; }
				return $er;
			}
			if (validarDrop($id_cli)==1) {
				$sql="UPDATE `".$this->table."` SET `updated_at`='".$updated_at."',`id_updated`='".$uid."',`status`=1 WHERE `id_cli` = ".$id_cli." ;";
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$inf="active";
				}else{
					$inf="noactive";
				}
			}else{
				$inf="null";
			}
			mysqli_close($c1);
			return $inf;
		}
		function desactivar($c1,$id_cli,$updated_at,$uid){
			function validarDrop($id_cli){
				$er=1;
				if(is_null($id_cli)){ $er=0; }
				return $er;
			}
			if (validarDrop($id_cli)==1) {
				$sql="UPDATE `".$this->table."` SET `updated_at`='".$updated_at."',`id_updated`='".$uid."',`status`=0 WHERE `id_cli` = ".$id_cli." ;";
				$res=mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$inf="desactive";
				}else{
					$inf="nodesactive";
				}
			}else{
				$inf="null";
			}
			mysqli_close($c1);
			return $inf;
		}
	}
?>