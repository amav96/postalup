/*$(function(){
    $('#q').on('click', function(e){
		e.preventDefault();
        
        var serie = $('#serie').val();
        var identificacion = $('#identificacion').val();
        

        $.ajax({
            type:"POST",
            url: "./ajax/listar_productos.php",
            data: {'serie':serie, 
                'identificacion':identificacion,},
                beforeSend: function(){
                    $('#imagen').show();
                    $('#mensajes').html('Procesando datos...');

                },
                success:function(respuesta){
                    $('#imagen').hide();
                    if(respuesta==1){
                        $('#mensajes').html('Enviado correctamente');
                    }
                    else{
                        $('#mensajes').html('No existe cliente');
                    }
            }    
        })
    })
})
*/
