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
        <li class="menu__item"><a class="menu__link" href="../cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </nav>
         </div>

</header>
<br>
   <div class="container">

      <section class="padre">
       <div class="card">
         <div class="card-body">
              <div class="form-group">
                <form action="../pdfsend/reportesrecolector.php" method="POST">
              
                   <label >Recolector</label>
                     <input type="text" class="form-control" name="id_recolector" id="id_recolector " placeholder="Nro Recolector">
                       <small class="form-text text-muted">Ingrese datos para generar un reporte</small>
                </div>
                  <div class="form-group">
                   <label>Fecha</label>
                     <input type="date" class="form-control" name="fecha" id="fecha" >
                  </div>  
                    <button type="submit" name="reporte" class="btn btn-info">Generar</button>
                </form>
              </div>
         </div>
       </div>
</div>


      </section>
       <script src="../js/menu.js"></script>     
    </body>
</html>
<?php

?>