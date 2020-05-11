<?php
if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
} if(!isset($_SESSION['administracion'])){
  header('location:../login/loginadm.php');
}

 //BUSCAR POR SERIE   PANEL
 if(isset($_POST['serieaa']))
 {
   include ('../abrir_conexion_cliente.php');
   $seriea=$_POST['seriea'];
   $acentos = $conn->query("SET NAMES 'utf8'");    
   $query=mysqli_query($conn,"SELECT estado_pac,horario_pac,direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,nombre_cliente,
   horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector,otrosaccesorios
    FROM express where serie='$seriea'");
   
 if($seriea=$query)
 {
   echo
   "
      
   <div class='table-responsive'>
       <table class='table table-striped table-hover'>
   <thead>
     <tr>
     <th scope='col'>Nro Orden</th>
     <th scope='col'>Recolector</th>
     
     <th scope='col'>Serie</th>
     <th scope='col'>Identificacion</th>
     <th scope='col'>Direccion</th>
     <th scope='col'>localidad</th>
     <th scope='col'>Codigo Postal</th>
     <th scope='col'>Tarjeta</th>
     <th scope='col'>Fecha Rec</th>
     <th scope='col'>Estado Rec</th>
     <th scope='col'>Cable HDMI</th>
     <th scope='col'>Cable AV</th>
     <th scope='col'>Fuente</th>
     <th scope='col'>Control</th>
     <th scope='col'>Estado Pac</th>
     <th scope='col'>Fecha Pac</th>
     <th scope='col'>Otros Accesorios</th>

      
   </tr>
   </thead>
 
       ";
 }
 while ($consulta = mysqli_fetch_array($query))
 
 {
 echo 
   "
   <tbody>
  <tr>
    <td>".$consulta['id_orden']."</td> 
    <td>".$consulta['id_recolector']."</td>
    <td>".$consulta['serie']."</td>          
    <td>".$consulta['identificacion']."</td> 
    <td>".$consulta['direccion']."</td> 
    <td>".$consulta['localidad']."</td> 
    <td>".$consulta['codigo_postal']."</td>  
    <td>".$consulta['tarjeta']."</td>  
    <td>".$consulta['horario_rec']."</td>
    <td>".$consulta['estado_rec']."</td>     
    <td>".$consulta['cable_hdmi']."</td>
    <td>".$consulta['cable_av']."</td>
    <td>".$consulta['fuente']."</td>
    <td>".$consulta['control_1']."</td>
    <td>".$consulta['estado_pac']."</td>
    <td>".$consulta['horario_pac']."</td>
    <td>".$consulta['otrosaccesorios']."</td>
    
 </tr>
 </tbody>
 
 </div>
 
    ";
  }
 include("../cerrar_conexion.php");
 }
//BUSCAR POR EMAIL  PANEL
 if(isset($_POST['emailaa']))
{
  include ('../abrir_conexion_cliente.php');
  $emaila=$_POST['emaila'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT e.estado_pac,e.horario_pac,e.id_orden,e.tarjeta,e.horario_rec,
  e.cable_hdmi,e.cable_av,e.fuente,e.control_1,e.id_recolector_2,e.equipo,e.serie,e.identificacion,e.nombre_cliente,e.direccion,e.localidad,e.codigo_postal,e.telefono1,s.email,e.estado_rec
  FROM express e INNER JOIN solocliente s ON e.identificacion=s.identificacion where s.email='$emaila'");
  
if($emaila=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    <th scope='col'>Serie</th>
    <th scope='col'>Email</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Estado Pac</th>
    <th scope='col'>Horario Pac</th>
    
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   <td>".$consulta['serie']."</td>  
   <td>".$consulta['email']."</td>         
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['direccion']."</td> 
   <td>".$consulta['localidad']."</td> 
   <td>".$consulta['codigo_postal']."</td> 
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['estado_pac']."</td>
   <td>".$consulta['horario_pac']."</td>
  
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR IDENTIFICACION confirmados PANEL
if(isset($_POST['identificacionaee']))
{
  include ('../abrir_conexion_cliente.php');
  $identificacionae=$_POST['identificacionae'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT estado_pac,horario_pac,direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,nombre_cliente,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector
   FROM express where identificacion='$identificacionae'");
  
if($identificacionae=1)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>estado_pac</th>
    <th scope='col'>horario_pac</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td> 
   <td>".$consulta['direccion']."</td>
   <td>".$consulta['localidad']."</td>
   <td>".$consulta['codigo_postal']."</td> 
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['estado_pac']."</td>
   <td>".$consulta['horario_pac']."</td>
   
  
</tr>
</tbody>

</div>

";
} 

include("../cerrar_conexion.php");
}

//BUSCAR POR NRO ORDEN confirmados PANEL
if(isset($_POST['ordenaa']))
{
  include ('../abrir_conexion_cliente.php');
  $ordena=$_POST['ordena'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT estado_pac,horario_pac,id_orden,serie,identificacion,tarjeta,
  horario_rec,nombre_cliente,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector
   FROM express where id_orden='$ordena'");
  
if($ordena=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Estado Pac</th>
    <th scope='col'>Horario Pac</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['estado_pac']."</td>
   <td>".$consulta['horario_pac']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR HORARIO confirmados PANEL
if(isset($_POST['fechaconfirmadosaa']))
{
  include ('../abrir_conexion_cliente.php');
  $fechaconfirmadosa=$_POST['fechaconfirmadosa'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT estado_pac,horario_pac,direccion,localidad,codigo_postal,id_orden,serie,identificacion,tarjeta,
  horario_rec,nombre_cliente,estado_rec,cable_hdmi,cable_av,fuente,control_1,id_recolector
   FROM express where horario_rec LIKE '%$fechaconfirmadosa%'");
  
if($fechaconfirmadosa=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
     <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Localidad</th>
    <th scope='col'>Codigo Postal</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha REC</th>
    <th scope='col'>Estado REC</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Estado Pac</th>
    <th scope='col'>Horario Pac</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector']."</td>
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>
   <td>".$consulta['direccion']."</td> 
   <td>".$consulta['localidad']."</td> 
   <td>".$consulta['codigo_postal']."</td>   
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['estado_pac']."</td>
   <td>".$consulta['horario_pac']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
} if(!isset($_SESSION['administracion'])){
  header('location:../login/loginadm.php');
}

//PANEL PARA PACTAR
if(isset($_POST['pactar']))

{

include ('../abrir_conexion_cliente.php');
   $identificacion_pacto=$_POST['identificacion_pacto'];
   $horario_pac=$_POST['horario_pac'];
   $operador=$_POST['operador'];
   $select2lista=$_POST['select2lista'];
   $estado_pac=$_POST['estado_pac'];
   $pactar=mysqli_query($conn,"UPDATE express SET horario_pac='$horario_pac', operador='$operador', id_recolector_2='$select2lista', estado_pac='$estado_pac' where identificacion='$identificacion_pacto'");
   $mostrarpacto=mysqli_query($conn,"SELECT estado_pac,id_recolector_2,operador,identificacion,serie,tarjeta, equipo,empresa,nombre_cliente,direccion,codigo_postal,localidad,estado_rec,horario_rec,horario_pac FROM express WHERE identificacion='$identificacion_pacto'");
  if (mysqli_affected_rows($conn)>0){
  if($mostrarpacto=$mostrarpacto)
  {
    echo 
    
      "
      
      <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>ESTADO.PAC</th>
    <th scope='col'>FECHA.PAC</th>
    <th scope='col'>ID.RECOLECTOR</th>
    <th scope='col'>OPERADOR</th>
    <th scope='col'>IDENTIFICACIÓN</th>
    <th scope='col'>SERIE</th>
    <th scope='col'>TARJETA</th>
    <th scope='col'>EQUIPO</th>
    <th scope='col'>EMPRESA</th>
    <th scope='col'>NOMBRE</th>
    <th scope='col'>DIRECCIÓN</th>
    <th scope='col'>CP</th>
    <th scope='col'>LOCALIDAD</th>
    <th scope='col'>ESTADO REC</th>
    <th scope='col'>HORARIO REC</th>

  </tr>
  </thead>

      ";
  }
  while ($consulta = mysqli_fetch_array($mostrarpacto))
  {
    echo 
    "
    
    </tbody>
    <tr>
      <td>".$consulta['estado_pac']."</td> 
      <td>".$consulta['horario_pac']."</td>   
      <td>".$consulta['id_recolector_2']."</td>
      <td>".$consulta['operador']."</td>         
      <td>".$consulta['identificacion']."</td>
      <td>".$consulta['serie']."</td>  
      <td>".$consulta['tarjeta']."</td>
      <td>".$consulta['equipo']."</td>     
      <td>".$consulta['empresa']."</td>
      <td>".$consulta['nombre_cliente']."</td>
      <td>".$consulta['direccion']."</td>
      <td>".$consulta['codigo_postal']."</td>
      <td>".$consulta['localidad']."</td>
      <td>".$consulta['estado_rec']."</td>
      <td>".$consulta['horario_rec']."</td>
   </tr>
   </tbody>

   
   </div>
   ";
  }
 }else {
    echo  "<div class='alert alert-info'>¡Reporte no enviado! El sistema no permite espacios vacios o los datos son incorrectos. ¡Intente nuevamente!</div>";
 }

   
include("../cerrar_conexion.php");
 
}

//BUSCAR POR IDENTIFICACION a confirmar
if(isset($_POST['buscar']))
{
  include ('../abrir_conexion_cliente.php');
  $identificacion_retiro=$_POST['identificacion_retiro'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,otrosaccesorios
   FROM autorizar where identificacion='$identificacion_retiro'");
  
if($identificacion_retiro=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Otros Accesorios</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['otrosaccesorios']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR NRO ORDEN a confirmar
if(isset($_POST['buscarorden']))
{
  include ('../abrir_conexion_cliente.php');
  $id_orden=$_POST['id_orden'];
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,horario_rec,otrosaccesorios
   FROM autorizar where id_orden='$id_orden'");
  
if($identificacion_retiro=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Otros Accesorios</th>
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['otrosaccesorios']."</td>
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//BUSCAR POR HORARIO a confirmar
if(isset($_POST['horario_rec']))
{
  include ('../abrir_conexion_cliente.php');
  $horario_rec=$_POST['horario_rec'];
  
  $acentos = $conn->query("SET NAMES 'utf8'");    
  $query=mysqli_query($conn,"SELECT id_orden,serie,identificacion,tarjeta,
  horario_rec,estado_rec,cable_hdmi,cable_av,fuente,control_1, id_recolector_2,horario_rec,otrosaccesorios
   FROM autorizar where horario_rec like '%$horario_rec%'");
  
if($horario_rec=$query)
{
  echo
  "
     
  <div class='table-responsive'>
			<table class='table table-striped table-hover'>
  <thead>
    <tr>
    <th scope='col'>Nro Orden</th>
    <th scope='col'>Recolector</th>
    
    <th scope='col'>Serie</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Estado</th>
    <th scope='col'>Cable HDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Otros Accesorios</th>
    
    
     
  </tr>
  </thead>

      ";
}
while ($consulta = mysqli_fetch_array($query))

{
echo 
  "
  <tbody>
 <tr>
   <td>".$consulta['id_orden']."</td> 
   <td>".$consulta['id_recolector_2']."</td>
   
   <td>".$consulta['serie']."</td>          
   <td>".$consulta['identificacion']."</td>  
   <td>".$consulta['tarjeta']."</td>  
   <td>".$consulta['horario_rec']."</td>
   <td>".$consulta['estado_rec']."</td>     
   <td>".$consulta['cable_hdmi']."</td>
   <td>".$consulta['cable_av']."</td>
   <td>".$consulta['fuente']."</td>
   <td>".$consulta['control_1']."</td>
   <td>".$consulta['otrosaccesorios']."</td>
   
   
  
</tr>
</tbody>

</div>

";
}

include("../cerrar_conexion.php");
}
//reportes
if(isset($_POST['consultando']))
{
  include('../abrir_conexion_cliente.php');

     $fecha1=$_POST['fecha1'];
     $reco1=$_POST['reco1'];
     $acentos = $conn->query("SET NAMES 'utf8'");
       $sql=mysqli_query($conn,"SELECT DISTINCT estado_rec,
             id_recolector_2,
             horario_rec,
             identificacion,
             serie,
             tarjeta,
             equipo,
             nombre_cliente,
             cable_hdmi,
             cable_av,
             fuente,
             control_1,
             otrosaccesorios,
             id_orden
from express WHERE id_recolector_2='$reco1' AND horario_rec
LIKE '%$fecha1%'  
UNION SELECT estado_rec,
             id_recolector_2,
             horario_rec,
             identificacion,
             serie,
             tarjeta,
             equipo,
             nombre_cliente,
             cable_hdmi,
             cable_av,
             fuente,
             control_1,
             otrosaccesorios,
             id_orden
FROM autorizar
WHERE id_recolector_2='$reco1' 
AND horario_rec LIKE '%$fecha1%'");

       if($reco1 and $fecha1)
       {
      echo 
      "
     
      <div class='table-responsive'>
      <table class='table table-striped table-hover'>
<thead>
    <tr>
    <th scope='col'>Estado</th>
    <th scope='col'>Recolector</th>
    <th scope='col'>Fecha</th>
    <th scope='col'>Orden</th>
    <th scope='col'>Identificacion</th>
    <th scope='col'>Nombre Cliente</th>
    <th scope='col'>Serie</th>
    <th scope='col'>Tarjeta</th>
    <th scope='col'>Equipo</th>
    <th scope='col'>Cable HHDMI</th>
    <th scope='col'>Cable AV</th>
    <th scope='col'>Fuente</th>
    <th scope='col'>Control</th>
    <th scope='col'>Otros Accesorios</th>
    

  </tr>
</thead>
      ";
    }
    while($consulta = mysqli_fetch_array($sql)) 
    {
      echo 
      "
         <tbody>
        <tr>
          <td>".$consulta['estado_rec']."</td>  
          <td>".$consulta['id_recolector_2']."</td>
          <td>".$consulta['horario_rec']."</td>
          <td>".$consulta['id_orden']."</td>
          <td>".$consulta['identificacion']."</td>
          <td>".$consulta['nombre_cliente']."</td>
          <td>".$consulta['serie']."</td>
          <td>".$consulta['tarjeta']."</td>
          <td>".$consulta['equipo']."</td>
          <td>".$consulta['cable_hdmi']."</td>
          <td>".$consulta['cable_av']."</td>
          <td>".$consulta['fuente']."</td>
          <td>".$consulta['control_1']."</td>
          <td>".$consulta['otrosaccesorios']."</td>
       </tr>
       </tbody>
       </div>

 ";
    }

include("../cerrar_conexion.php");
 }

?>