<?php
 
 class metodos{
     public function mostrarDatos($sql){
         $metodoconectar= new conectar();
         $conexion=$metodoconectar->conexion();

         $result=mysqli_query($conexion,$sql);
        
         mysqli_close($conexion);
         return mysqli_fetch_all($result,MYSQLI_ASSOC);
     }
     public function insertarOrden($datos){
        $metodoconectar= new conectar();
        $conexion=$metodoconectar->conexion();
        
        $sql="INSERT INTO ordenes (id_recolector,fecha_orden) 
                          VALUES ('$datos[0]','$datos[1]')";

          return  $result=mysqli_query($conexion,$sql);
          

     }
     
 }

?>