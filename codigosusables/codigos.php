<!-- muestra elemento html por consola de una sesion-->


<script>
   $(function () { 
   //var valueQueNecesito = el nombre de la 
   //variable = y llama al id del elemento
   // html id="order", text. por ser html.
   // Si fuera de un input fuera val().
    var valueQueNecesito = $('#order').text();
    console.log(valueQueNecesito);   
     });
</script>

<?php require_once('../funciones/caracteres.php');?>
						<tr class="<?php echo $text_class;?>">
						<td>
						<a href="https://api.whatsapp.com/send?phone=+549<?php telefonoWhats($telefonocorto); ?>&text=*<?php echo $identificacion ?>*%20*<?php echo $nombre_cliente ?>.*%20*Buenos*%20*d%C3%ADas.*%20*En*%20*la*%20*baja*%20*del*%20*servicio*%20*<?php echo $empresa ?>*%20*quedo*%20*pendiente*%20*de*%20*devolución*%20*el*%20*decodificador*%20*serie*%20*<?php echo $serie ?>,*%20*domicilio*%20*<?php echo $direccion ?>.*%20HOY%20ESTAMOS%20RETIRANDO%20EQUIPOS%20EN%20SU%20ZONA,%20*evitandole*%20*futuras*%20*solicitudes*%20*y*%20*esperas.*%0D%0A*Responda:*%0D%0A%20*1-%20RETIRAR*%20%0D%0A%20*2-%20LLAMAR*%20%0D%0A%20*3-%20DEVUELTO*%20%0D%0A%20*4-Posee%20el*%20deco%20*y*%20*desea*%20*retiro*%20*en*%20*otro*%20*d%C3%ADa,*%20*responda:*%20%20*REPACTAR*%20%20*INFO:*%20*pactado2@postalmarketing.com.ar*%20*o*%20*WP*%20*54911*%20*3874*%20*1529*%20*o*%20*11-3221-3774*%20Lu-Vie%20de%208%20a%2017%20.%20*MUCHAS*%20*GRACIAS*&source=&data=&app_absent="
						 target="_blank" class="fab fa-whatsapp" style="color:#2E9AFE;"></a>
						</td>
						<td>
						
						<a href="https://api.whatsapp.com/send?phone=+549<?php telefonoWhats($telefonocorto); ?>&text=*<?php echo $identificacion ?>*%20*<?php echo $nombre_cliente ?>*%20En%2015%20minutos%20aprox.%20Llego%20a%20tu%20domicilio.%20Hay%20gente%20para%20entregar%20el/los%20equipos?.%20*Avisame,*%20*no*%20*puedo*%20*demorarme*%20*ni*%20*esperar,*%20*tengo*%20*recorrido*%20*Programado.*&source=&data=&app_absent="
						 target="_blank" class="fas fa-car " style="color:#2E9AFE;"></a>
						</td>
						<td>
						
						<a href="mailto:<?php reemplazarEmail($correo); ?>?Subject=<?php echo $empresa ?>%20AVISO%201%20RECUPERACIÓN%20EQUIPOS%20&body=¡Hola!%20<?php echo $nombre_cliente ?>,%20Cliente%20<?php echo $identificacion ?>.%20Nos%20contactamos%20de%20<?php echo $empresa ?>%20,para%20la%20devolución%20del/los%20Equipos/s%20dados%20de%20Baja,%20una%20unidad%20esta%20proxima%20a%20su%20domicilio%20<?php echo $direccion ?>%20para%20retiro%20de%20los%20mismos.%20Solicitamos%20nos%20responda%20este%20mensaje%20si%20tiene%20los%20equipos%20<?php echo $serie ?>%20para%20retirar,%20caso%20contrario%20contactece%20por%20este%20medio%20al%20email%20pactado2@postalmarketing.com.ar%20o%20al%20WP%2054911%203874%201529%20o%2011-3221-3774"
						 target="_blank" class="fas fa-envelope" style="color:#2E9AFE;"></a>
						</td>

