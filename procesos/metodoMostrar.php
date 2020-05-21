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

     public function mostrarOrden($status){
        if ($status==1) {
            $metodoconectar = new conectar();
            $conexion=$metodoconectar->conexion();

             $sql="SELECT id FROM ordenes order by id desc limit 1";
             $resultados=mysqli_query($conexion,$sql);
             if ($resultados) {
                 if ($resultados->num_rows > 0) {
                     while ($row= mysqli_fetch_array($resultados)) {
                         $ret = $row['id'];
                     }
                     mysqli_free_result($resultados);
                 }
                 else{
                    $ret = 0;
                 }
             }else{
                $ret = 0;
             }
        }else{ $ret = ''; }

        return $ret;
     }
     
 }

?>