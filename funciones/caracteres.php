<?php


      $correo=$emailcliente;
      function reemplazarEmail($correo){
     $reemplazo=str_replace("/",";","$correo");
    
      echo "$reemplazo";
   
    }

  //esto es lo que iria abajo-->  reemplazarEmail($correo);


  
  $telefonocorto=$telefono2;
   function telefonoWhats($telefonocorto) {
  $tomociertoscaracteres=substr("$telefonocorto",0,10);

  echo "$tomociertoscaracteres" ;

   }
   //esto es lo que iria abajo-->  telefonoWhats($telefonocorto);


?>
