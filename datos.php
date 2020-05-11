<?php
$conexion=mysqli_connect("192.99.46.110", "postalmarketing", "Samsung5#", "reality2_postalmarketing");
$codigorecolectores=$_POST['codigorecolectores'];

        $sql="SELECT id,codigo_postal,id_recolector,nombre_recolector /* id[0],codigo_postal[1],id_recolector[2] */
             FROM recolectores WHERE codigo_postal='$codigorecolectores' LIMIT 1";
        
        $result=mysqli_query($conexion,$sql);

        $cadena="<select class='form-control' id='lista2' name='lista2'>";

        while ($ver=mysqli_fetch_row($result)){
            $cadena=$cadena.'<option value='.$ver[2].'>'.utf8_encode($ver[2]).'</option>';
        }

        echo $cadena."</select>";

        
?>