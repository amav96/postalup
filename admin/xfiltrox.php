<?php
//include 'conexion.php';
SESSION_START();

if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PostalMarketing</title>
    <!--metodo para hace la pagina responsive-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

  <!-- vinculacion con estilo css -->
  <link rel="stylesheet" href="../css/estilos.css">
 <script>src="../js/jquery-3.4.1.min.js"</script>
  <script>src="../bootstrap/js/bootstrap.min.css"</script>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href="../fonts/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/flexbox.css">
  
  <link rel="stylesheet" href="../css/logo.css">
  
  
 
 </head>
<body>
  <header class="header">
    <div class="contenedor">
      <img src="../img/logo.png" class="info__logo">
      <span class="icon-menu" id="btn-menu"></span>
      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="../index.php">INICIO</a></li>
        <li class="menu__item"><a class="menu__link" href="../admin/administracion.php">PANEL</a></li>
        <li class="menu__item"><a class="menu__link select" href="../admin/xfiltrox.php" >FILTRO</a></li>
        <li class="menu__item"><a class="menu__link " href="../admin/reportes.php" >REPORTES</a></li>
        <li class="menu__item"><a class="menu__link" href="../cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </nav>
         </div>

</header>
<br>
<div class="container">
       <section class="padre">
      <div  class="alert alert-danger"style="position:inherit;">Panel Filtro</div>
    <div class="alert alert-danger" style= "position:inherit;padding-top: 15px; padding-bottom: 55px;">
         <form action="../admin/xfiltrox.php" method="POST" class="form-inline" style="float:left;" >
  <div class="form-group">
        <input type="text" class="form-control" name="id_recolector" id="id_recolector" placeholder="ID RECOLECTOR" required>
        <input type="date" class="form-control" name="fecha_asignado" id="fecha_asignado">
         <button type="submit" name="consultar" class="btn btn-danger" style="float:left;width:150px;height:36px;">Buscar</button>
  </div>
         </form>
    </div>

        </section>
</div>
<div class="container">
       <section class="padre">
      <div  class="alert alert-danger"style="position:inherit;">Panel Filtro</div>
    <div class="alert alert-danger" style= "position:inherit;padding-top: 15px; padding-bottom: 55px;">
         <form action="../admin/xfiltrox.php" method="POST" class="form-inline" style="float:left;" >
  <div class="form-group">
        <label>Fecha Comienzo:</label>
        <input type="date" class="form-control" name="fecha2" id="fecha2" required>
        <label>Fecha Final:</label>
        <input type="date" class="form-control" name="fecha3" id="fecha3">
         <button type="submit" name="consultar1" class="btn btn-danger" style="float:left;width:150px;height:36px;">Buscar</button>
  </div>
         </form>
    </div>
       </section>
       </div>
       </section>
</div>
<div class="container">
       <section class="padre">
      <div  class="alert alert-danger"style="position:inherit;">Panel Filtro</div>
    <div class="alert alert-danger" style= "position:inherit;padding-top: 15px; padding-bottom: 55px;">
         <form action="../admin/xfiltrox.php" method="POST" class="form-inline" style="float:left;" >
  <div class="form-group">
  <select class="form-control" name="estado1" id="estado1" style="float:left; width:130px;height:38px;">
            <option value="PACTADO">PACTADO</option>
            <option value="A-CONFIRMAR">A CONFIRMAR</option>
            <option value="RECUPERADO">RECUPERADO</option>
            <option value="RECHAZADA">RECHAZADA</option>
            <option value="NO-EXISTE-NUMERO">NO EXISTE NUMERO</option>
            <option value="NO-RESPONDE">NO RESPONDE</option>
            <option value="TIEMPO-ESPERA">TIEMPO LIMITE ESPERA</option>
            <option value="SE-MUDO">SE MUDO</option>
            <option value="YA-RETIRADO">YA RETIRADO</option>
            <option value="ZONA-PELIGROSA">ZONA PELIGROSA</option>
            <option value="NO-TUVO-EQUIPO">NO TUVO EQUIPO</option>
            <option value="N/R-TELEFONO">NO RESPONDE TELEFONO</option>
            <option value="N/TEL-EQUIVOCADO">TEL EQUIVOCADO</option>
            <option value="DESHABITADO">DESHABITADO</option>
            <option value="ROBADO">ROBADO</option>
            <option value="CONFIRMADO">CONFIRMADO</option>
            <option value="RELLAMAR">RELLAMAR</option>
            <option value="NO-COINCIDE-SERIE">NO COINCIDE SERIE</option>
            <option value="LLAMARA-A-BASE">LLAMARA A BASE</option>
            <option value="ENTREGARA-EN-BASE">ENTREGARA EN BASE</option>
     </select>
     <label>Fecha Comienzo:</label>
        <input type="date" class="form-control" name="fecha4" id="fecha4" required style="width:150px;height:36px;">
      <label>Fecha Final:</label>
        <input type="date" class="form-control" name="fecha5" id="fecha5" required style="width:150px;height:36px;">
         <button type="submit"  name="consultar2" class="btn btn-danger" style="width:80px;height:36px;">Buscar</button>
  </div>
         </form>
    </div>

        </section>
</div>
       <script src="../js/menu.js"></script>     
    </body>
</html>
<?php

if(!isset($_SESSION['administracion'])){ 
  header('location:../login/loginadm.php');
} if(!isset($_SESSION['administracion'])){
  header('location:../login/loginadm.php');
}

if(isset($_POST['consultar']))
{
  include('../abrir_conexion_cliente.php');

     $fecha_asignado=$_POST['fecha_asignado'];
     $id_recolector=$_POST['id_recolector'];
     $acentos = $conn->query("SET NAMES 'utf8'");
       $sql=mysqli_query($conn,"SELECT estado_pac,estado_rec,operador,id_recolector,fecha_asignado,horario_rec,identificacion,nombre_cliente,
      serie,tarjeta,equipo,codigo_postal,direccion,localidad
       from express where id_recolector='$id_recolector' and fecha_asignado='$fecha_asignado'");

       if($id_recolector and $fecha_asignado=$sql)
       {
      echo 
      "
     
      <div class='table-responsive'>
      <table class='table table-striped table-hover'>
<thead>
    <tr>
    <th scope='col'>ESTADO.PAC</th>
    <th scope='col'>ESTADO.REC</th>
    <th scope='col'>OPERADOR</th>
    <th scope='col'>ID.RECOLECTOR</th>
    <th scope='col'>FECHA.ASIGNADO</th>
    <th scope='col'>HORARIO.REC</th>
    <th scope='col'>IDENTIFICACION</th>
    <th scope='col'>NOMBRE.C</th>
    <th scope='col'>SERIE</th>
    <th scope='col'>TARJETA</th>
    <th scope='col'>EQUIPO</th>
    <th scope='col'>CP</th>
    <th scope='col'>DIRECCION</th>
    <th scope='col'>LOCALIDAD</th>
    

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
          <td>".$consulta['estado_pac']."</td>          
          <td>".$consulta['estado_rec']."</td>  
          <td>".$consulta['operador']."</td>  
          <td>".$consulta['id_recolector']."</td>
          <td>".$consulta['fecha_asignado']."</td>     
          <td>".$consulta['horario_rec']."</td>
          <td>".$consulta['identificacion']."</td>
          <td>".$consulta['nombre_cliente']."</td>
          <td>".$consulta['serie']."</td>
          <td>".$consulta['tarjeta']."</td>
          <td>".$consulta['equipo']."</td>
          <td>".$consulta['codigo_postal']."</td>
          <td>".$consulta['direccion']."</td>
          <td>".$consulta['localidad']."</td>
       </tr>
</thead>
</div>
 ";
    }

include("../cerrar_conexion.php");
 }


if(isset($_POST['consultar1']))
{
  include('../abrir_conexion_cliente.php');

     $fecha3=$_POST['fecha3'];
     $fecha2=$_POST['fecha2'];
     $acentos = $conn->query("SET NAMES 'utf8'");
       $sql=mysqli_query($conn,"SELECT estado_pac,estado_rec,operador,id_recolector,fecha_asignado,horario_rec,identificacion,nombre_cliente,
       serie,tarjeta,equipo,codigo_postal,direccion,localidad
       from express WHERE fecha_asignado BETWEEN '$fecha2' AND '$fecha3'");

       if($fecha2 or $fecha3)
       {
      echo 
      "
     
      <div class='table-responsive'>
      <table class='table table-striped table-hover'>
<thead>
    <tr>
    <th scope='col'>ESTADO.PAC</th>
    <th scope='col'>ESTADO.REC</th>
    <th scope='col'>OPERADOR</th>
    <th scope='col'>ID.RECOLECTOR</th>
    <th scope='col'>FECHA.ASIGNADO</th>
    <th scope='col'>HORARIO.REC</th>
    <th scope='col'>IDENTIFICACION</th>
    <th scope='col'>NOMBRE.C</th>
    <th scope='col'>SERIE</th>
    <th scope='col'>TARJETA</th>
    <th scope='col'>EQUIPO</th>
    <th scope='col'>CP</th>
    <th scope='col'>DIRECCION</th>
    <th scope='col'>LOCALIDAD</th>
    

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
          <td>".$consulta['estado_pac']."</td>          
          <td>".$consulta['estado_rec']."</td>  
          <td>".$consulta['operador']."</td>  
          <td>".$consulta['id_recolector']."</td>
          <td>".$consulta['fecha_asignado']."</td>     
          <td>".$consulta['horario_rec']."</td>
          <td>".$consulta['identificacion']."</td>
          <td>".$consulta['nombre_cliente']."</td>
          <td>".$consulta['serie']."</td>
          <td>".$consulta['tarjeta']."</td>
          <td>".$consulta['equipo']."</td>
          <td>".$consulta['codigo_postal']."</td>
          <td>".$consulta['direccion']."</td>
          <td>".$consulta['localidad']."</td>
       </tr>
       </tbody>
       </div>

 ";
    }

include("../cerrar_conexion.php");
 }
 

if(isset($_POST['consultar2']))
{
  include('../abrir_conexion_cliente.php');
     $estado1=$_POST['estado1'];
     $fecha4=$_POST['fecha4'];
     $fecha5=$_POST['fecha5'];
     $acentos = $conn->query("SET NAMES 'utf8'");
       $sql=mysqli_query($conn,"SELECT estado_pac,estado_rec,operador,id_recolector,fecha_asignado,horario_rec,identificacion,nombre_cliente,
      serie,tarjeta,equipo,codigo_postal,direccion,localidad
       from express WHERE estado_pac='$estado1' and fecha_asignado BETWEEN '$fecha4' AND '$fecha5'");

       if($estado1 xor $fecha4 xor $fecha5 =$sql)
       {
      echo 
      "
     
      <div class='table-responsive'>
      <table class='table table-striped table-hover'>
<thead>
    <tr>
    <th scope='col'>ESTADO.PAC</th>
    <th scope='col'>ESTADO.REC</th>
    <th scope='col'>OPERADOR</th>
    <th scope='col'>ID.RECOLECTOR</th>
    <th scope='col'>FECHA.ASIGNADO</th>
    <th scope='col'>HORARIO.REC</th>
    <th scope='col'>IDENTIFICACION</th>
    <th scope='col'>NOMBRE.C</th>
    <th scope='col'>SERIE</th>
    <th scope='col'>TARJETA</th>
    <th scope='col'>EQUIPO</th>
    <th scope='col'>CP</th>
    <th scope='col'>DIRECCION</th>
    <th scope='col'>LOCALIDAD</th>
    

  </tr>

      ";
    }
    while($consulta = mysqli_fetch_array($sql)) 
    {
      echo 
      "
         <tbody>
        <tr>
          <td>".$consulta['estado_pac']."</td>          
          <td>".$consulta['estado_rec']."</td>  
          <td>".$consulta['operador']."</td>  
          <td>".$consulta['id_recolector']."</td>
          <td>".$consulta['fecha_asignado']."</td>     
          <td>".$consulta['horario_rec']."</td>
          <td>".$consulta['identificacion']."</td>
          <td>".$consulta['nombre_cliente']."</td>
          <td>".$consulta['serie']."</td>
          <td>".$consulta['tarjeta']."</td>
          <td>".$consulta['equipo']."</td>
          <td>".$consulta['codigo_postal']."</td>
          <td>".$consulta['direccion']."</td>
          <td>".$consulta['localidad']."</td>
       </tr>
       </tbody>
       </div>

 ";
}

include("../cerrar_conexion.php");
 }

?>