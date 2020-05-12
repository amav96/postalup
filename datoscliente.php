<?php
session_start();
print_r($_SESSION);
if(!empty($_SESSION['login_user']))
{
header('Location:..login/loginrecolector.php');
}

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
          <div class="form-group">
            <div class="form-group mx-sm-3 mb-2">
              <a href="#addProductModal" class="btn btn-success" data-toggle="modal" style="width:150px;height:40px;"><i class="material-icons" >&#xE147;</i> <span>Agregar Equipo</span></a>
            </div>   
</div>       
            <div class="form-group mx-sm-3 mb-2">
            <?php require("php/generarorden.php") ?> 
            <!--enviado por ruta ACTI/-->
              <form  action="" method="POST">
                <input type="text" class="form-control"  name="id_recoleorden" id="id_recoleorden" value="<?php if(isset($_SESSION['username']))
							{ echo $_SESSION['username']['username']; } ?>" placeholder="ID recolector" style="float:right;width:150px;height:40px;" 
                 >
                <input type="hidden" class="form-control" name="fecha_orden"style="float:right;width:150px;height:40px;" value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
                <button type="submit" name="ordengenerar" id="ordengenerar" class="btn btn-primary mb-2" style="width:150px;height:40px;">Generar Orden</button>
              
              </form>
            </div> 
          </section>

          <!--tabla generar orden p -->

          
            <table id="table1" class='table table-responsive'>
              <thead>
                <tr>
                  <th scope='col'>Nro.Orden</th>
                  </tr>
                    </thead>
                    <tbody>
                      <tr>
                 <th id="order">
                </tr>
              </thead>
            </table>
          
        </div>
      </div>
      
      <!-- BUSCAR -->
      <div class='col-sm-4 pull-right' style="position:inherit;">
        <div id="custom-search-input" style="position:inherit;">
          <div class="input-group col-md-12" style="position:inherit;">
            <input type="text" class="form-control" placeholder="Buscar"  id="q" style="position:inherit;"/>
            <span class="input-group-btn">
              <button class="btn btn-info" type="button" onclick="load(1);">
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

<!--OBTENGO VALOR DE LA SESION DEL LADO DEL SERVIDOR 
<script> 
$(function(){
  var idValueQueNecesito = $('#order').text(); // esto agarra tu numero de orden 
  $(".").on('click', '.editar', function () {
    $('#idValueQueNecesito').val($().closest("tr").find(".order").text());
    $('#editProductModal').modal('show');

    console.log(idValueQueNecesito);
});
});
         $.ajax({
         method: "POST",
         url: "html/modal_edit.php",
         data: {"idValueQueNecesito":idValueQueNecesito},
         dataType: "json"})
         .done(function(data){ 
         console.log(data); // esto es lo que yo te había dicho cierto
         $("input[name=edit_id_orden").text(data.edit_id_orden)
  });    

</script>-->
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
    t=setTimeout("inactividad()",800000);
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