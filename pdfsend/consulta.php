<?php
require_once('conex_pdf.php');

class Equipos extends Database
     {
     public function TicketCaptura(varchar $id_orden)
       {    
       $identificacion=$_POST['identificacion'];
       $id_orden=$_POST['id_orden'];
       $result = $this->pdo->query("SELECT serie,nombre_cliente,identificacion,id_orden, tarjeta,
                                            direccion,cable_hdmi, cable_av, fuente, control_1,horario_rec,
                                            password_rec,id_recolector_2 from express where id_orden='.$id_orden'
                                            and identificacion='$identificacion'");

                                  return $result->FetchAll();
       }
    }                                            