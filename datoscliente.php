<?php
session_start();
print_r($_SESSION);
if(!empty($_SESSION['login_user']))
{
header('Location:..login/loginrecolector.php');
}
require_once "conectar/bd.php";
require_once "procesos/metodoMostrar.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel Recolector</title>

<link rel="stylesheet" href="css/alertorden.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/estilos.css">
  <script>src="js/jquery-3.4.1.min.js"</script>
  <script>src="bootstrap/js/bootstrap.min.css"</script>
  
  <link href="fonts/styles.css" rel="stylesheet">
 <link rel="stylesheet" href="css/formulario.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" href="css/flexbox.css">
  
  

  <!-- sesion para llevar nro de orden y id recolector -->
 
 </head>
 
<body>
<div>
  <header class="header">
    <div class="contenedor">
      <img src="img/logo.png" class="info__logo">
      
      <span class="icon-menu" id="btn-menu"></span>

      <nav class="nav" id="nav">
        <ul class="menu">
          <li class="menu__item"><a class="menu__link select" href="index.php">INICIO</a></li>
          <li class="menu__item"><a class="menu__link select" href="cerrar_sesion.php">FINALIZAR</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="container" style="position:inherit;">
    <div class="table-wrapper" style="position:inherit;">
      <div class="table-title" style="position:inherit;">
        <div class="row" style="position:inherit;color:black;">
          <div class="col-sm-6" style="position:inherit;">
            <b><h2>Panel Recolector</b></h2>
          </div>
          
          <br>
          <!--formulario generar orden -->
          <section>
          
            <div class="form-group mx-sm-3 mb-2">
              <a href="#addProductModal" class="btn btn-success" data-toggle="modal" ><i class="material-icons" >&#xE147;</i>Agregar Equipo</a>
            </div>   
             <div class="form-group mx-sm-3 mb-2">
               <form  action="procesos/insertar.php" method="POST">
                 <input type="text" class="form-control"  name="id_recoleorden" id="id_recoleorden" value="<?php if(isset($_SESSION['username']))
							    { echo $_SESSION['username']['username']; } ?>" placeholder="ID recolector" style="width:100px;height:25px;" >
                   </div> 
                   <div class="form-group mx-sm-3 mb-2">
                   <input type="hidden" class="form-control" name="fecha_orden" id="fecha_orden" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
                     <button class="btn btn-primary" style="width:143px;">Generar Orden</button>
                     </div> 
                </form>
            
          </section>

          <!--tabla generar orden p -->

          
            <table id="table1" style="border-collapse: collapse;" class='table table-responsive'>
              <thead>
                <tr>
                  <th scope='col'>Nro.Orden</th>
                  </tr>
                    </thead>
                    <?php
                     
                    $obj = new metodos();
                    $sql = "SELECT id from ordenes ORDER BY id DESC LIMIT 1 ";
                    $datos=$obj->mostrarDatos($sql);
                    
                    foreach ($datos as $key){
                    
                    ?>
                    <tbody>
                      <tr>
                      <th id="order"> <?php echo $key['id'] ?></th>
                      </tr>
              </thead>
              <?php
                }
                     
              ?>
            </table>
          
        </div>
      </div>
      
      <!-- BUSCAR -->
      <div class='col-sm-4 pull-right' style="position:inherit;">
        <div id="custom-search-input" style="position:inherit;">
          <div class="input-group col-md-12" style="position:inherit;">
            <input type="text" class="form-control" placeholder="Buscar Cliente"  id="q" style="position:inherit;height:27.5px;"/>
            <span class="input-group-btn">
              <button class="btn btn-danger" type="button" onclick="load(1);">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>    
          </div>    
        </div>
        <br>
        <form action="enviarcliente.php" method="POST" >
          <button class="btn btn-primary mb-2" style="margin:;float:left;">Enviar cupon a cliente</button>
	       </form>
      </div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->  
    </div>	
  </div>
</div>
	<!-- Edit Modal HTML -->
  <?php include("html/modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("html/modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("html/modal_delete.php");?>

<!-- cerrar sesion despues de cierto tiempo-->
  <script type="text/javascript">
	function e(q) {
    document.body.appendChild( document.createTextNode(q) );
    document.body.appendChild( document.createElement("BR") );
}
function inactividad() {
  window.location.href = "cerrar_sesion.php";
}
var t=null;
function contadorInactividad() {
    t=setTimeout("inactividad()",600000);
}
window.onblur=window.onmousemove=function() {
    if(t) clearTimeout(t);
    contadorInactividad();
}
</script>

<script>
	$(".btn-success").click(function(){

$("input[name=id_orden]").val($("#order").text());

});
</script>

<script>
	$(".btn-success").click(function(){

$("input[name=id_orden]").val($("#order").text());

});
</script>

</script>
	<script src="js/script.js"></script>
	<script src="js/menu.js"></script>

</body>
</html>                          		                            