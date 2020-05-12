<?php

require_once("../conexion.php");


			function validarOrden($id_recolector){
				$defecto=1;
				if(is_null($id_recolector)){ $er=0; }
				return $defecto;
			}
			if (validarOrden($id_recolector)==1) {
				$sql="INSERT INTO ordenes (`id_recolector`) VALUES ('$id_recolector', '$fecha_orden')";
				$respuesta=mysqli_query($con,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($con));
				if ($respuesta) {
					$inf="add";
				}else{
					$inf="noadd";
				}
			}else{
				$inf="null";
			}
			mysqli_close($con);
			return $inf;
		