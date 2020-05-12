$(document).ready(function(){
   $('#loginform').submit(function(e){
   e.preventDefault();
   $.ajax({
      type: "GET",
      url: '../javascriptvalidacion/validacionlogin.php',
      data: $(this).serialize(),
      success: function(response)
      {
         var jsonData = JSON.parse(response);

         //elusuario es logueado satisfactoriamente en el back end
         // redirrecciona
         if (jsonData.success=="1")
         {
             location.href = '../datoscliente.php';
             
             $("input[name='id_recolector']").val(jsondata.success)
         }
         else
         {
           alert('Invalid Credenciales!');
         }
      }
   });
 });
});
