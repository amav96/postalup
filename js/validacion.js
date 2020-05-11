
    $(document).ready(function() 
      {

       $('#login').click(function()
        {
           var username=$("#username").val();
           console.log(username)
           var dataString = 'username='+username;
           if($.trim(username).length>0)
           
        {
           $.ajax({
           type: "POST",
           url: "../javascriptvalidacion/validacionlogin.php",
           data: dataString,
           cache: false,
           beforeSend: function(){ $("#login").val('Connecting...');},
           success: function(data){
           if(data)
        {
           $("body").load("../datoscliente.php").hide().fadeIn(1500).delay(6000);
           //or
           window.location.href = "../datoscliente.php";
        }
           else
        {

           $("#login").val('Login')
           $("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username . ");
           }
        }
    });

           }
           return false;
     });

});

