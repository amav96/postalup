<?php
SESSION_START();
if(!isset($_SESSION['logged_user'])){
    header('location:login/loginrecolector.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel Recolector</title>
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
  
  
  <link href="fonts/styles.css" rel="stylesheet">
 
 </head>
<body>
  <div>
  <header class="header">
    <div class="contenedor">
      <img src="./img/logo.png" class="info__logo">
      
      <span class="icon-menu" id="btn-menu"></span>

      <nav class="nav" id="nav">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link select" href="index.php">INICIO</a></li>
        <li class="menu__item"><a class="menu__link select" href="datoscliente.php">SEGUIR OPERANDO</a></li>
        <li class="menu__item"><a class="menu__link select" href="datoscliente.php">VOLVER ATRAS</a></li>
        <li class="menu__item"><a class="menu__link select" href="cerrar_sesion.php">CERRAR SESION</a></li>
      </ul>
    </nav>
</div>
<section class="padre">
<main role="main" class="container">
    
            <div class="row">
                <!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
                <div class="col-12">
                    <h1>¡Gracias por enviar cupón!</h1>
                </div>
                <div class="col-12">
                    <form method="POST" action="correo.php">
                        <div class="form-group">
                            <label>Nro Orden</label>
                            <input  type="text" name="id_orden" class="form-control" placeholder="Nro. Orden" style="width:180px;height:38px;" value="<?php if(isset($_SESSION['id_order']))
							 { echo $_SESSION['id_order']; } ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="identificacion">Identificacion Cliente</label>
                            <input type="text" name="identificacion_cliente"  id="identificacion_cliente"
                                class="form-control" placeholder="Identificacion Cte" style="width:180px;height:38px;" required> 
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="email" id="email" class="form-control"  placeholder="Correo Cte"
                            style="width:180px;height:38px;" required>
                                
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto</label>
                            <select name="asunto"  type="text" id="asunto"
                                class="form-control" style="width:180px;height:38px;" required> 
                           <option value="Cupón Express">Cupón Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-info" type="submit" value ="Enviar" name="enviar">
                                
                        </div>
                    </form>
                    <div class="abs-center">
                    <div class="form-group">
                     <form method="POST" action="datoscliente.php">
                     <input class="btn btn-danger" type="submit" value ="Volver" name="enviar">
                        </form>
                        </div>
                </div>
            </div>

        </main>
        </section>

       
        
        
         
         
         

	<script src="js/menu.js"></script>

</body>
</html               