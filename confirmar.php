<?php
$mensaje = "Si genero la orden aprete si, si no,no";
echo "<script>";
echo "if(confirm('$mensaje'));";  
echo "window.location = 'http://localhost/enviarcliente.php';";
echo "</script>"; 
?>