<?php
	/**
	 * 
	 */
	class orden
	{
		private $table ='orden';
		private $table2='cliente';
		private $table3='recolector';
		private $table4='producto';
		private $table5='products_orden';
		private $actio ='detalle.php?p=';

		function listar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
					$inf.='<th></th>';
					$inf.='<th>N°</th>';
					$inf.='<th>ID</th>';
					$inf.='<th>Serie</th>';
					$inf.='<th>Cliente</th>';
					$inf.='<th>Recolestor</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=6;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				$sql="SELECT o.id_ord, c.nombre_cli, r.nombre_rec, o.serie_ord FROM ".$this->table." o INNER JOIN ".$this->table2." c ON o.id_cli=c.id_cli INNER JOIN ".$this->table3." r ON o.id_rec=r.id_rec ORDER BY id_ord ; ";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
								$inf.='<td>';
									$inf.='<a href="'.URL.$this->table.$this->actio.base64_encode($row['id_ord']).'" class="btn btn-warning"><i class="fas fa-edit"></i></a>';
								$inf.='</td>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>'.$row['id_ord'].'</td>';
								$inf.='<td>'.$row['serie_ord'].'</td>';
								$inf.='<td>'.$row['nombre_cli'].'</td>';
								$inf.='<td>'.$row['nombre_rec'].'</td>';
							$inf.='</tr>';

							$n++;
						}
					}else{
						$inf.='';
					}
				}else{
					$inf.='<tr><td colspan="'.$cant.'"><div clas="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div></td></tr>';
				}
				
			$inf.='<tbody>';
			mysqli_close($c1);

			return $inf;
		}
		function exportar($c1){
			$inf=null;$n=1;
			$inf.='<thead>';
				$inf.='<tr>';
				$inf.='<th>linea</th>';
                $inf.='<th>mes</th>';
                $inf.='<th>nro_cliente</th>';
                $inf.='<th>cliente</th>';
                $inf.='<th>nombre</th>';
                $inf.='<th>apellido</th>';
                $inf.='<th>email</th>';
                $inf.='<th>telefono</th>';
                $inf.='<th>rol</th>';
                $inf.='<th>fecha_de_ingreso</th>';
                $inf.='<th>canal_de_ingreso</th>';
                $inf.='<th>administrador</th>';
                $inf.='<th>id_fecha</th>';
				
				$inf.='</tr>';
			$inf.='</thead>';
			$cant=12;
			$_SESSION['Cant_Col'] = $cant;
			$inf.='<tbody>';
				//$sql="SELECT * FROM ".$this->table." ORDER BY id_num DESC; ";
				$sql="SELECT * from tablaiplan1";
				$res = mysqli_query($c1,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<tr>';
							$inf.='<td>'.$row['linea'].'</td>';
                            $inf.='<td>'.$row['mes'].'</td>';
                            $inf.='<td>'.$row['nro_cliente'].'</td>';
                            $inf.='<td>'.$row['cliente'].'</td>';
                            $inf.='<td>'.$row['nombre'].'</td>';
                            $inf.='<td>'.$row['apellido'].'</td>';
                            $inf.='<td>'.$row['email'].'</td>';
                            $inf.='<td>'.$row['telefono'].'</td>';
                            $inf.='<td>'.$row['rol'].'</td>';
                            $inf.='<td>'.$row['fecha_de_ingreso'].'</td>';
                            $inf.='<td>'.$row['canal_de_ingreso'].'</td>';
                            $inf.='<td>'.$row['administrador'].'</td>';
                            $inf.='<td>'.$row['id_fecha'].'</td>';
								
							$inf.='</tr>';

							$n++;
						}
					}else{
						$inf.='';
					}
				}else{
					$inf.='<tr><td colspan="'.$cant.'"><div clas="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div></td></tr>';
				}
				
			$inf.='<tbody>';
			mysqli_close($c1);
			

			return $inf;
		}
	}
?>