<?php

require '../fpdf/fpdf.php';
require '../abrir_conexion_cliente.php';




if(isset($_POST['submit']))
{ require '../abrir_conexion_cliente.php';
  
$identificacion=$_POST['identificacion'];
$id_orden=$_POST['id_orden'];
$acentos = $conn->query("SET NAMES 'utf8'");  
$productos ="SELECT e.empresa,a.serie,a.tarjeta,e.direccion,a.cable_hdmi,
a.cable_av,a.fuente,a.control_1,a.id_orden,a.identificacion,e.nombre_cliente,
a.horario_rec,e.password_rec,a.password_rec,e.id_recolector_2,a.id_recolector_2,a.estado_rec,a.adicional,
e.otrosaccesorios,a.otrosaccesorios FROM express e INNER JOIN autorizar a on e.identificacion=a.identificacion
 WHERE a.id_orden = '$id_orden' and a.identificacion='$identificacion'  GROUP BY a.serie;";
$acentos = $conn->query("SET NAMES 'utf8'");
$result = $conn->query($productos);
if (mysqli_affected_rows($conn)>0){
    
    
if($productos2= $result->fetch_array())
{
    $pdf = new FPDF('P', 'mm', array(100,75));
    $pdf->AddPage();
    
    $pdf->SetAutoPageBreak(true,14);
    $pdf->SetFillColor(134,203,236);
    $pdf->Rect(0,0,280,16,'F');
    $pdf->SetY(20);
    
    $pdf->SetFont('Arial','B',5);
    $pdf->SetTextColor(255,255,255);
    $pdf->Write(-15,'COMPROBANTE DE RETIRO DE EQUIPO Y COMPONENTES');
    $pdf->SetFont('Arial','B',2.5);
    $pdf->Ln(2);
    $pdf->SetX(14);
    $pdf->SetTextColor(255,255,255);
    $pdf->Write(-15,'IMPORTANTE Por consulta sobre el presente retiro 4844-4777 / informes@Postalmarketing.com.ar');
    
    $pdf->SetTextColor(7,4,3);
    $pdf->SetFont('Arial','B',10);
    $pdf->Image('../img/logo.png', 1.5,0.1, 10);
    $pdf->Image('../img/qr.png',61,1,11,10);
    $pdf->SetY(15);
    $pdf->Ln(0.5);
    
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(-25,6,'',0,0,'C');

    
    $pdf->Cell(100,7,$productos2['empresa'],0,0,'C');
    $pdf->SetLineWidth(0.5);
    $pdf->SetDrawColor(134,203,236);
    $pdf->Line(0, $pdf->GetY() + 6, 140, $pdf->GetY() +6);
    $pdf->SetY(34);
    $pdf->Ln(-14);
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(-53,4,'',0,0,'C');
    $pdf->Cell(100,6,'Remito Nro. Orden:',0,0,'C');
    $pdf->Cell(-24,6,'',0,0,'C');
    $pdf->Cell(4.5,6,$productos2['id_orden'],0,0,'C');
    $pdf->Cell(-25,6,'',0,0,'C');
    $pdf->Ln(2.3);
    $pdf->Cell(-54.9,6,'',0,0,'C');
    $pdf->Cell(100,6,'Cliente Nro:',0,0,'C');
    $pdf->Cell(-24.5,6,'',0,0,'C');
    $pdf->Cell(7,6,$productos2['identificacion'],0,0,'C');
    
    $pdf->Ln(1.6);
    $pdf->Cell(-48.3,2,'',0,0,'C');
    $pdf->Cell(86,7,'Direccion:',0,0,'C');
    
    $pdf->SetFont('Arial','B',3);
    $pdf->SetX(-108);
    $pdf->Cell(135,7,$productos2['direccion'],0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(-51.4,6,'',0,0,'C');
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(95.1,7,'Nombre Cliente:',0,0,'C');
    $pdf->Cell(-37,6,'',0,0,'C');
    $pdf->Cell(34,7,$productos2['nombre_cliente'],0,0,'C');


    $pdf->Ln(2);
    $pdf->Cell(-7.2,7,'Fecha Recupero:',0,0,'C');
    $pdf->Cell(-1.4,6,'',0,0,'C');
    $pdf->Cell(66,7,$productos2['horario_rec'],0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(-8.6,7,'Fecha Remito:',0,0,'C');
    $pdf->Cell(-1,6,'',0,0,'C');
    $pdf->Cell(67.5,7,date('d/m/Y'),0,0,'C');
    $pdf->Ln(2);
    $pdf->Cell(-11.8,7,'Estado:',0,0,'C');
    $pdf->Cell(2.5,6,'',0,0,'C');
    $pdf->Cell(67,7,$productos2['estado_rec'],0,0,'C');
    $pdf->Ln(2);
    
    $pdf->Cell(-13,7,'Otro:',0,0,'C');
    $pdf->Cell(3.5,6,'',0,0,'C');
    $pdf->Cell(67.5,7,$productos2['adicional'],0,0,'C');
    $pdf->Ln(0);
    $pdf->SetLineWidth(0.5);
    $pdf->SetDrawColor(134,203,236);
    $pdf->Line(0, $pdf->GetY() + 6, 140, $pdf->GetY() +6);
    
    $pdf->SetY(74);
    
    $pdf->Cell(6,6,'',0,0,'C');
    $pdf->Cell(80,7,$productos2['id_recolector_2'],0,0,'C');
    $pdf->Cell(-94,6,'',0,0,'C');
    $pdf->Cell(63.5,7,$productos2['password_rec'],0,0,'C');

    $pdf->Ln(2);
    $pdf->Cell(-46.2,6,'',0,0,'C');
    
    
    
    $pdf->SetY(47);
    $pdf->Ln(-5);
    
    
    $pdf->SetLineWidth(0.2);
    $pdf->SetFillColor(240,240,240);
    $pdf->SetTextColor(40,40,40);
    $pdf->SetDrawColor(255,255,255);
    
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(-8.5,6,'',0,0,'L');
    $pdf->Cell(13,4,'Serie',1,0,'C',1);
    
    $pdf->Cell(10,4,'Tarjeta',1,0,'C',1);
    $pdf->Cell(11,4,'Cable HDMI',1,0,'C',1);
    $pdf->Cell(11,4,'Cable AV',1,0,'C',1);
    
    $pdf->Cell(8,4,'Fuente',1,0,'C',1);
    $pdf->Cell(8,4,'Control',1,0,'C',1);
    $pdf->Cell(11,4,'Otros',1,0,'C',1);
    
    $pdf->Ln(4.3);
    $pdf->Cell(-8.4,6,'',0,0,'C');
    $pdf->Cell(11,3,$productos2['serie'],0,0,'C',1);
    $pdf->Cell(14.5,3,$productos2['tarjeta'],0,0,'C',1);
    $pdf->Cell(6,3,$productos2['cable_hdmi'],0,0,'C',1);
    $pdf->Cell(15,3,$productos2['cable_av'],0,0,'C',1);
    $pdf->Cell(4,3,$productos2['fuente'],0,0,'C',1);
    $pdf->Cell(12.5,3,$productos2['control_1'],0,0,'C',1);
    $pdf->Cell(8.8,3,$productos2['otrosaccesorios'],0,0,'C',1);
    

    $pdf->SetY(42);
    $pdf->SetLineWidth(0.2);
    $pdf->SetFillColor(240,240,240);
    $pdf->SetTextColor(40,40,40);
    $pdf->SetDrawColor(255,255,255);
    $pdf->Ln(7.8);
    
    
    
   
    
    

    
    //Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
    


}


    while($productos2= $result->fetch_array())
{
    

    
    
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(-8.4,6,'',0,0,'C');
    $pdf->Cell(11,3,$productos2['serie'],0,0,'C',1);
    $pdf->Cell(14.5,3,$productos2['tarjeta'],0,0,'C',1);
    $pdf->Cell(6,3,$productos2['cable_hdmi'],0,0,'C',1);
    $pdf->Cell(15,3,$productos2['cable_av'],0,0,'C',1);
    $pdf->Cell(4,3,$productos2['fuente'],0,0,'C',1);
    $pdf->Cell(12.5,3,$productos2['control_1'],0,0,'C',1);
    $pdf->Cell(8.8,3,$productos2['otrosaccesorios'],0,0,'C',1);
   
   
    $pdf->Ln(3.5);


}


}


else {
    echo "<div class='container'><div class='alert alert-info'>¡Consulta Incorrecta! ¡Intente nuevamente!</div></div>";
 }
 $pdf->Output();
}

 


?>