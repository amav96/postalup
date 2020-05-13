<?php
 
 class metodos{
     public function mostrarDatos($sql){
         $metodoconectar= new conectar();
         $conexion=$metodoconectar->conexion();

         $result=mysqli_query($conexion,$sql);
        
         mysqli_close($conexion);
         return mysqli_fetch_all($result,MYSQLI_ASSOC);
     }
     
     
 }

?>