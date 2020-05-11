l input del jquery esta mal escrito



si tienes un id mejor así



$("#idValueQueNecesito").text(dsta.iddelaorden)



cuando meyasven consola el data, vas  a poder verlo
 como una lista despegable, y saber como acceder a la información que traes

 es mi responsabilidad no ser especifico. ese id orden, 
 es otra tabla que esta en en el fichero datoscliente.php. el recuperar, esta en otra tabla.

<a href="https://api.whatsapp.com/send?phone=<?php echo $serie ?>&text=
						Express%20-%20Estamos%20en%20camino%20a%20su%20domicilio%20para%20retirar%20el%20equipo%C3%A1s%20vendiendo&source
						=&data=&app_absent=" class="fab fa-whatsapp"></a>
						</td>

                        <script>
$(function(){
  var idValueQueNecesito = $('#order').text();
    $(document).on('click', 'editar', function () {
    $('#idValueQueNecesito').val($().closest("tr").find(".order").text());
    $('#editProductModal').modal('show');
});
});
</script>