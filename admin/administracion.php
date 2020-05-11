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
   <!--fuente para iconos-->
   
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/estilos.css">
 <script>src="../js/jquery-3.4.1.min.js"</script>
  <script>src="../bootstrap/js/bootstrap.min.js"</script>
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
        <li class="menu__item"><a class="menu__link select" href="../admin/administracion.php">PANEL</a></li>
        <li class="menu__item"><a class="menu__link" href="../admin/xfiltrox.php">FILTRO</a></li>
        <li class="menu__item"><a class="menu__link" href="../admin/reportes.php">REPORTES</a></li>
        <li class="menu__item"><a class="menu__link" href="../cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </nav>
         </div>
         
         <br>
         <br>
<div class="container">

         <section class="padre">
         
         <div class="alert alert-info" style="position:inherit;">Panel Buscador</div>
         <div class="alert alert-info" style="position:inherit;width:673px;">
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      
         <input type="text" class="form-control"  name="identificacionae" id="identificacionae" placeholder="Identificación" style="width:120px;height:40px">
         <button type="submit" name="identificacionaee" id="identificacionae" class="btn btn-info"><i class="fas fa-search"></i></button>
</div>
    </form>
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
        <div class="form-group mx-sm-3 mb-2">
         
         <input type="text" class="form-control"  name="emaila" id="emaila" placeholder="email" style="width:100px;height:40px">
         <button type="submit" name="emailaa" id="emaila" class="btn btn-info"><i class="fas fa-search"></i></button>
      </div>

    </form>
    <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
    <div class="form-group mx-sm-3 mb-2">
    
         <input type="date" class="form-control"  name="fechaconfirmadosa" id="fechaconfirmadosa" placeholder=" Fecha" style="width:170px;height:40px">
         <button type="submit" name="fechaconfirmadosaa" id="fechaconfirmadosa" class="btn btn-info"><i class="fas fa-search"></i></button>
      </div>

    </form>
    <br>
    <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      
         <input type="text" class="form-control"  name="seriea" id="seriea" placeholder="Serie" style="width:120px;height:40px">
         <button type="submit" name="serieaa" id="seriea" class="btn btn-info"><i class="fas fa-search"></i></button>
</div>
    </form>
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
        <div class="form-group mx-sm-3 mb-2">
         
         <input type="text" class="form-control"  name="ordena" id="ordena" placeholder="orden" style="width:100px;height:40px">
         <button type="submit" name="ordenaa" id="ordena" class="btn btn-info"><i class="fas fa-search"></i></button>
      </div>

    </form>
    
       
     
 
</section>
        
<!--PANEL PARA PACTAR-->

<section class="padre">

<div  class="alert alert-info"style="position:inherit;">Panel Pactar</div>
<div class="alert alert-info" style= "position:inherit;padding-top: 15px; padding-bottom: 55px;width:695px;">
<a href="#" id="show3">Click aqui</a>
        <div id="elementpactar" style="display: none;">
        <div id="close3"><a href="#" id="hide3">Volver Atras</a></div>
<form action="../admin/administracion.php" method="POST" class="form-inline"style="margin:0;float:left;" >

   <input type="text" class="form-control" name="identificacion_pacto" id="identificacion_pacto" placeholder="Identificacion a pactar"style="margin:0;float:left;width:190px;height:38px;"required>
  
   
   <input type="text" class="form-control" name="horario_pac" id="horario_pac" style="float:left;width:170px;height:38px;"required  value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
   <input type="text" class="form-control" name="operador" id="operador" placeholder="Operador" style="float:left;width:120px;height:38px;"required>
     
     
     <select class="form-control"  id="lista1" name="lista1"  style="float:left; width:150px;height:38px;">
            <option value="0">Seleccione CP</option>
            <option value="1000">1000</option>
            <option value="1406">1406</option>
            <option value="1407">1407</option>
            <option value="1408">1408</option>
            <option value="1414">1414</option>
            <option value="1416">1416</option>
            <option value="1417">1417</option>
            <option value="1419">1419</option>
            <option value="1424">1424</option>
            <option value="1425">1425</option>
            <option value="1426">1426</option>
            <option value="1427">1427</option>
            <option value="1429">1429</option>
            <option value="1430">1430</option>
            <option value="1431">1431</option>
            <option value="1437">1437</option>
            <option value="1439">1439</option>
            <option value="1440">1440</option>
            <option value="1009">1009</option>
            <option value="1015">1015</option>
            <option value="1035">1035</option>
            <option value="1094">1094</option>
            <option value="1159">1159</option>
            <option value="1179">1179</option>
            <option value="1181">1181</option>
            <option value="1209">1209</option>
            <option value="1263">1263</option>
            <option value="1264">1264</option>
            <option value="1270">1270</option>
            <option value="1407">1407</option>
            <option value="1408">1408</option>
            <option value="1419">1419</option>
            <option value="1424">1424</option>
            <option value="1425">1425</option>
            <option value="1426">1426</option>
            <option value="1428">1428</option>
            <option value="1431">1431</option>
            <option value="1437">1437</option>
            <option value="1439">1439</option>
            <option value="1440">1440</option>
            <option value="1602">1602</option>
            <option value="1603">1603</option>
            <option value="1604">1604</option>
            <option value="1605">1605</option>
            <option value="1606">1606</option>
            <option value="1607">1607</option>
            <option value="1609">1609</option>
            <option value="1611">1611</option>
            <option value="1613">1613</option>
            <option value="1614">1614</option>
            <option value="1615">1615</option>
            <option value="1617">1617</option>
            <option value="1618">1618</option>
            <option value="1619">1619</option>
            <option value="1621">1621</option>
            <option value="1623">1623</option>
            <option value="1625">1625</option>
            <option value="1627">1627</option>
            <option value="1629">1629</option>
            <option value="1631">1631</option>
            <option value="1633">1633</option>
            <option value="1635">1635</option>
            <option value="1636">1636</option>
            <option value="1638">1638</option>
            <option value="1640">1640</option>
            <option value="1641">1641</option>
            <option value="1642">1642</option>
            <option value="1643">1643</option>
            <option value="1644">1644</option>
            <option value="1646">1646</option>
            <option value="1647">1647</option>
            <option value="1648">1648</option>
            <option value="1650">1650</option>
            <option value="1651">1651</option>
            <option value="1653">1653</option>
            <option value="1655">1655</option>
            <option value="1657">1657</option>
            <option value="1661">1661</option>
            <option value="1663">1663</option>
            <option value="1664">1664</option>
            <option value="1665">1665</option>
            <option value="1667">1667</option>
            <option value="1669">1669</option>
            <option value="1414">1414</option>
            <option value="1672">1672</option>
            <option value="1674">1674</option>
            <option value="1676">1676</option>
            <option value="1678">1678</option>
            <option value="1682">1682</option>
            <option value="1683">1683</option>
            <option value="1684">1684</option>
            <option value="1686">1686</option>
            <option value="1688">1688</option>
            <option value="1702">1702</option>
            <option value="1703">1703</option>
            <option value="1704">1704</option>
            <option value="1706">1706</option>
            <option value="1708">1708</option>
            <option value="1712">1712</option>
            <option value="1713">1713</option>
            <option value="1714">1714</option>
            <option value="1716">1716</option>
            <option value="1718">1718</option>
            <option value="1722">1722</option>
            <option value="1723">1723</option>
            <option value="1727">1727</option>
            <option value="1736">1736</option>
            <option value="1738">1738</option>
            <option value="1741">1741</option>
            <option value="1742">1742</option>
            <option value="1744">1744</option>
            <option value="1746">1746</option>
            <option value="1748">1748</option>
            <option value="1752">1752</option>
            <option value="1753">1753</option>
            <option value="1754">1754</option>
            <option value="1755">1755</option>
            <option value="1757">1757</option>
            <option value="1759">1759</option>
            <option value="1759">1759</option>
            <option value="1761">1761</option>
            <option value="1763">1763</option>
            <option value="1765">1765</option>
            <option value="1768">1768</option>
            <option value="1770">1770</option>
            <option value="1772">1772</option>
            <option value="1773">1773</option>
            <option value="1774">1774</option>
            <option value="1776">1776</option>
            <option value="1778">1778</option>
            <option value="1804">1804</option>
            <option value="1806">1806</option>
            <option value="1812">1812</option>
            <option value="1814">1814</option>
            <option value="1822">1822</option>
            <option value="1823">1823</option>
            <option value="1824">1824</option>
            <option value="1825">1825</option>
            <option value="1826">1826</option>
            <option value="1828">1828</option>
            <option value="1832">1832</option>
            <option value="1833">1833</option>
            <option value="1834">1834</option>
            <option value="1836">1836</option>
            <option value="1838">1838</option>
            <option value="1842">1842</option>
            <option value="1843">1843</option>
            <option value="1845">1845</option>
            <option value="1846">1846</option>
            <option value="1847">1847</option>
            <option value="1849">1849</option>
            <option value="1852">1852</option>
            <option value="1854">1854</option>
            <option value="1856">1856</option>
            <option value="1862">1862</option>
            <option value="1865">1865</option>
            <option value="1868">1868</option>
            <option value="1869">1869</option>
            <option value="1870">1870</option>
            <option value="1871">1871</option>
            <option value="1872">1872</option>
            <option value="1873">1873</option>
            <option value="1874">1874</option>
            <option value="1875">1875</option>
            <option value="1876">1876</option>
            <option value="1878">1878</option>
            <option value="1879">1879</option>
            <option value="1881">1881</option>
            <option value="1882">1882</option>
            <option value="1884">1884</option>
            <option value="1885">1885</option>
            <option value="1886">1886</option>
            <option value="1888">1888</option>
            <option value="1889">1889</option>
            <option value="1890">1890</option>
            <option value="1891">1891</option>
            <option value="1893">1893</option>
            <option value="1894">1894</option>
            <option value="1895">1895</option>
            <option value="1896">1896</option>
            <option value="1897">1897</option>
            <option value="1900">1900</option>
            <option value="2000">2000</option>
            <option value="2700">2700</option>
            <option value="2800">2800</option>
            <option value="2804">2804</option>
            <option value="2900">2900</option>
            <option value="3000">3000</option>
            <option value="3100">3100</option>
            <option value="3300">3300</option>
            <option value="3400">3400</option>
            <option value="3500">3500</option>
            <option value="3514">3514</option>
            <option value="3600">3600</option>
            <option value="4000">4000</option>
            <option value="4200">4200</option>
            <option value="4400">4400</option>
            <option value="4500">4500</option>
            <option value="4600">4600</option>
            <option value="4700">4700</option>
            <option value="5000">5000</option>
            <option value="5012">5012</option>
            <option value="5019">5019</option>
            <option value="5800">5800</option>
            <option value="5805">5805</option>
            <option value="5817">5817</option>
            <option value="5825">5825</option>
            <option value="5300">5300</option>
            <option value="5400">5400</option>
            <option value="5500">5500</option>
            <option value="5501">5501</option>
            <option value="5503">5503</option>
            <option value="5505">5505</option>
            <option value="5504">5504</option>
            <option value="5513">5513</option>
            <option value="5515">5515</option>
            <option value="5519">5519</option>
            <option value="5521">5521</option>
            <option value="5535">5535</option>
            <option value="5539">5539</option>
            <option value="5570">5570</option>
            <option value="5573">5573</option>
            <option value="5700">5700</option>
            <option value="6300">6300</option>
            <option value="6700">6700</option>
            <option value="7000">7000</option>
            <option value="7260">7260</option>
            <option value="7600">7600</option>
            <option value="8300">8300</option>
            <option value="8324">8324</option>
            <option value="8400">8400</option>
            <option value="9000">9000</option>
            <option value="9100">9100</option>
            <option value="9103">9103</option>
            <option value="9105">9105</option>
            <option value="9120">9120</option>
            <option value="9230">9230</option>
            <option value="9400">9400</option>
           
     </select>
     <select id="select2lista" name="select2lista" style="float:left; width:170px;height:38px;"required></select>
     
    <select class="form-control" name="estado_pac" id="estado_pac" style="float:left; width:150px;height:38px;">
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
        <button type="submit" name="pactar" class="btn btn-info" style="float:left;"><i class="far fa-check-square"></i></i></button>

     </form>

       
       </section>



<!--PANEL EQUIPOS (a) CONFIRMAR-->

         <section class="padre">
         <div class="alert alert-info" style="position:inherit;">Equipos a confirmar</div>
         <div class="alert alert-info" style="position:inherit;width:639px;">
         <a href="#" id="show1">Click aqui</a>
        <div id="elementidentificacion" style="display: none;">
        <div id="close1"><a href="#" id="hide1">Volver Atras</a></div>
      
        <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
       <label>Identificación</label>
         <input type="text" class="form-control"  name="identificacion_retiro" id="identificacion_retiro" placeholder="Identificación" style="width:120px;height:40px" >
         <button type="submit" name="buscar" class="btn btn-info"><i class="fas fa-search"></i></button>
         
      </div>
      </form>
      
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      <div class="form-group mx-sm-3 mb-2">
      <label>Nro Orden</label>
         <input type="text" class="form-control"  name="id_orden" id="id_orden" placeholder="Nro Orden" style="width:120px;height:40px" >
         <button type="submit" name="buscarorden" class="btn btn-info"><i class="fas fa-search"></i></button>
       </div>
        </form>
      <form  action="../admin/administracion.php" method="POST" style="margin:0; float:left;">
      
      <label>Fecha</label>
         <input type="date" class="form-control"  name="horario_rec" id="horario_rec" placeholder="Fecha" style="width:160px;height:40px" >
         <button type="submit" name="fecha" class="btn btn-info"><i class="fas fa-search"></i></button>

      </form>
      
      
</section>


        
    <!--reportes EQUIPOS -->

    
<section class="padre">
         <div class="alert alert-info" style="position:inherit;">Reporte equipos retirados <br> por recolector</div>
         <div class="alert alert-info" style="position:inherit;width:597px;">
         <a href="#" id="show5">Click aqui</a>
        <div id="elementpactar5" style="display: none;">
        <div id="close5"><a href="#" id="hide5">Volver Atras</a></div>
        <form action="../admin/administracion.php" method="POST" class="form-inline" style="float:left;" >
  <div class="form-group">
        <label>Recolector:</label>
        <input type="text" class="form-control" name="reco1" id="reco1" placeholder="Recolector" required style="width:110px;height:36px;">
        <label>Fecha :</label>
        <input type="date" class="form-control" name="fecha1" id="fecha1" required style="width:180px;height:36px;">
         <button type="submit" name="consultando" class="btn btn-info" style="float:left;"><i class="fas fa-search"></i></button>
  </div>
         </form>
    </div>
       </section>

      </section>
    

</div>
<?php
include ("../php/php.php");
?> 
  <script src="../js/menu.js"></script> 
  
  </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(0);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"../datos.php",
			data:"codigorecolectores=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#hide1").click(function(){
    $("#elementidentificacion").hide();
  });
  $("#show1").click(function(){
    $("#elementidentificacion").show();
  });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#hide3").click(function(){
    $("#elementpactar").hide();
  });
  $("#show3").click(function(){
    $("#elementpactar").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide4").click(function(){
    $("#elementpactar4").hide();
  });
  $("#show4").click(function(){
    $("#elementpactar4").show();
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#hide5").click(function(){
    $("#elementpactar5").hide();
  });
  $("#show5").click(function(){
    $("#elementpactar5").show();
  });
});
</script>




