<?php
 require_once("../conectar/bd.php");
 require_once("metodoMostrar.php");

 $id_recoleorden=$_POST['id_recoleorden'];
 $fecha_orden=$_POST['fecha_orden'];
 
 $datos=array(
        $id_recoleorden,
        $fecha_orden);
  $obj = new metodos();
  
  if($obj->insertarOrden($datos)==1){
      header("location:../datoscliente.php?status=generado");
  }
  else {
      echo "fallo orden";
      
  }


?>