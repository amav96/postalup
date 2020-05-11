<!DOCTYPE html>
<html lang="es">
<head>
	<title>PostalMarketing</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
    <!--metodo para hace la pagina responsive-->

  <!-- vinculacion con estilo css -->
 
  <link href="css/contenedor.css" rel="stylesheet">
  <link href="fonts/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/logo.css">
  <link rel="stylesheet" href="css/what.css">
  <link rel="stylesheet" href="css/estiloiconos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
 
 </head>
<body>
	<div>
	<header class="header">
		<div class="contenedor">
			<img src="img/logo.png" class="info__logo contenedormove">
			<span class="icon-menu" id="btn-menu"></span>
			<nav class="nav" id="nav">
			<ul class="menu">
				<li class="menu__item"><a class="menu__link select" href="">INICIO</a></li>
				<li class="menu__item"><a class="menu__link" href="nosotros.php">EMPRESA</a></li>
				<li class="menu__item"><a class="menu__link" href="cobertura.php">COBERTURA</a></li>
				<li class="menu__item"><a class="menu__link" href="login/loginadm.php">ADMINISTRACIÓN</a></li>
				<!--<li class="menu__item"><a class="menu__link" href="administraciontotal/index.php">ADMINISTRACIÓN TOTAL</a></li>-->
				<li class="menu__item"><a class="menu__link" href="login/loginrecolector.php">RECOLECTOR</a></li>
				<li class="menu__item"><a class="menu__link" href="login/logincupon.php">CLIENTE</a></li>
				
			</ul>
		</nav>
         </div>
	</header>
<div class="banner">
	<img src="img/2.jpg" alt="" class="banner__img"></a>
	<div class="contenedor">
		<h2 class="banner__titulo" >Postal Marketing</h2>
		<p class="banner__txt">EXPRESS</p>
		<div>
		<img id="cohete" src="img/hombre.svg" alt="" class="estylo" style="position:relative;top:-15px;width:70px;heigth:70px;"></a>
</div>
	</div>
	
</div>

<main class="main">
	<div class="contenedor">
<section class="info">
	<article class="info__columna">
		<a href="nosotros.php"><img src="img/transporte.svg" alt="" class="info__img contenedormove"></a>
		<h2 class="info__titulo"> Logistica</h2>
		<p class="info__txt">Distribuciones masivas al destinatario, servicio fullfilment o finishing. </p>
		<div>
			<!--<a href="https://api.whatsapp.com/send?phone=541136145942&text=*Hola,*%20*me*%20*quisiera*%20*poner*%20*en*%20*contacto*%20*con*%20*ustedes.*%20*Espero*%20*pronta*%20*respuesta.*&source=&data=&app_absent=" target="_blank">--><img src="img/caja.svg" alt="" class="estylo contenedormove"></a>
			<style>
				.estylo {
				width: 90px;
				height: 90px;
				display: block;
				margin: auto;
			}
			</style>
		</div>

	</article>
	<article class="info__columna">
		<a href="cobertura.php"><img src="img/asistencia.svg" alt="" class="info__img contenedormove"></a>
		<h2 class="info__titulo"> Seguimiento</h2>
		<p class="info__txt">Brindando el mayor soporte para el seguimiento de tu producto.</p>
		<div>
			<a href="cobertura.php"><img src="img/laptop.svg" alt="" class="estylo contenedormove"></a>
			<style>
				.estylo {
				width: 90px;
				height: 90px;
				display: block;
				margin: auto;
			}
			</style>
		</div>

	</article>
	<article class="info__columna">
		<a href="formulario.php"><img src="img/grua.svg" alt="" class="info__img contenedormove"></a>
		<h2 class="info__titulo"> Rentabilidad</h2>
		<p class="info__txt"> Minimizamos los costos de tu entrega para obtener la mayor rentabilidad.</p>
		<div>
			<a href="formulario.php"><img src="img/almacen.svg" alt="" class="estylo contenedormove"></a>
			<style>
				.estylo {
				width: 90px;
				height: 90px;
				display: block;
				margin: auto;
			}
			</style>
		</div>

	</article>

</section>
</div>
</main>
</div>
	<footer class="footer">
	<div class="social">
	<a href="https://api.whatsapp.com/send?phone=541136145942&text=*Hola,*%20*me*%20*quisiera*%20*poner*%20*en*%20*contacto*%20*con*%20*ustedes.*%20*Espero*%20*pronta*%20*respuesta.*&source=&data=&app_absent=" target="_blank"><img src="img/mensaje.svg" class="responsivewhat contenedormove"/></a>
	<img src="img/facebook.svg" class="responsiveface contenedormove"/>
		

	</div>
	<p class="copy">&copy; Express Metropolitina S.R.L 2005 - Todos los derechos reservados</p>
</footer>
</div>
	<script src="js/menu.js"></script>
	<script>
        $("#cohete").hide();
        $("#cohete").show(1400);
       
        </script>
</body>
</html>