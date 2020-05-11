<?php

require '../fpdf/fpdf.php';
require '../abrir_conexion_cliente.php';




if(isset($_POST['reporte']))
{ require '../abrir_conexion_cliente.php';
  
$id_recolector=$_POST['id_recolector'];
$fecha=$_POST['fecha'];

$sql="SELECT DISTINCT empresa,password_rec,estado_rec, id_recolector_2, horario_rec, identificacion, serie, tarjeta, equipo, nombre_cliente, cable_hdmi, cable_av, fuente, control_1,otrosaccesorios from express WHERE id_recolector_2='$id_recolector' AND horario_rec LIKE '%$fecha%' UNION SELECT empresa,password_rec,estado_rec, id_recolector_2, horario_rec, identificacion, serie, tarjeta, equipo, nombre_cliente, cable_hdmi, cable_av, fuente, control_1,otrosaccesorios FROM autorizar WHERE id_recolector_2='$id_recolector' AND horario_rec LIKE '%$fecha%'";

//$res=mysqli_query($conn,$sql) or $_SESSION['Mysqli_Error'] = (mysqli_error($conn));

$variable = $conn->query($sql);
    if (mysqli_affected_rows($conn)>0){        
        
    
if($row= $variable->fetch_array())
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
    $pdf->SetY(18);
    $pdf->Ln(0.5);
    
    $pdf->SetFont('Arial','B',6);
    $pdf->Cell(-6,6,'',0,0,'L');
    $pdf->Cell(15,3,'Recolector',0,0,'C',1);
    $pdf->Cell(-43,6,'',0,0,'C');
    $pdf->Cell(98,3,$row['id_recolector_2'],0,0,'C');
    $pdf->Cell(-33,6,'',0,0,'L');
    $pdf->Cell(-8,3,'Fecha',0,0,'C',1);
    $pdf->Cell(-25,6,'',0,0,'C');
    $pdf->Cell(90,3,$row['horario_rec'],0,0,'C');
    $pdf->SetLineWidth(0.5);
    $pdf->SetDrawColor(134,203,236);
    $pdf->Line(0, $pdf->GetY() + 6, 140, $pdf->GetY() +6);

    $pdf->SetY(74);
    $pdf->SetFont('Arial','B',4);
    
    $pdf->Cell(-5.5,6,'',0,0,'C');
    $pdf->Cell(66,7,$row['password_rec'],0,0,'C');
    
    $pdf->Ln(0);
    $pdf->SetLineWidth(0.5);
    $pdf->SetDrawColor(134,203,236);
    $pdf->Line(0, $pdf->GetY() + 6, 140, $pdf->GetY() +6);
    
    $pdf->SetY(74);

    

    $pdf->Ln(2);
    $pdf->Cell(-46.2,6,'',0,0,'C');
    
    
    
    $pdf->SetY(27);
    $pdf->Ln(-1);
    
    
    $pdf->SetLineWidth(0.2);
    $pdf->SetFillColor(240,240,240);
    $pdf->SetTextColor(40,40,40);
    $pdf->SetDrawColor(255,255,255);
    
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(-8.5,6,'',0,0,'L');
    $pdf->Cell(11,4,'SERIE',1,0,'C',1);
    $pdf->Cell(9,4,'CLIENTE',1,0,'C',1);
    $pdf->Cell(8,4,'EMPRESA',1,0,'C',1);
    $pdf->Cell(9.5,4,'TARJETA',1,0,'C',1);
    $pdf->Cell(6.5,4,'HDMI',1,0,'C',1);
    $pdf->Cell(6.5,4,'AV',1,0,'C',1);
    $pdf->Cell(5.5,4,'FUENTE',1,0,'C',1);
    $pdf->Cell(6,4,'CONTROL',1,0,'C',1);
    $pdf->Cell(10,4,'OTROS',1,0,'C',1);
    
    $pdf->Ln(2);

    

    $pdf->SetY(30);
    $pdf->SetLineWidth(0.2);
    $pdf->SetFillColor(240,240,240);
    $pdf->SetTextColor(40,40,40);
    $pdf->SetDrawColor(255,255,255);
    $pdf->Ln(0.2);
    
    
    $pdf->Cell(-8.4,6,'',0,0,'C');
    $pdf->Cell(11,3,$row['serie'],0,0,'C',1);
    $pdf->Cell(10,3,$row['identificacion'],0,0,'C',1);
    $pdf->Cell(6,3,$row['empresa'],0,0,'C',1);
    $pdf->Cell(12,3,$row['tarjeta'],0,0,'C',1);
    $pdf->Cell(3,3,$row['cable_hdmi'],0,0,'C',1);
    $pdf->Cell(10.5,3,$row['cable_av'],0,0,'C',1);
    $pdf->Cell(1.9,3,$row['fuente'],0,0,'C',1);
    $pdf->Cell(8.9,3,$row['control_1'],0,0,'C',1);
    $pdf->Cell(8.5,3,$row['otrosaccesorios'],0,0,'C',1);
    
   
    
    
    $pdf->Ln(3.5);
    
    //Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
    


}


    while($row= $variable->fetch_array())
{
    

    
    
    $pdf->SetFont('Arial','B',3);
    $pdf->Cell(-8.4,6,'',0,0,'C');
    $pdf->Cell(11,3,$row['serie'],0,0,'C',1);
    $pdf->Cell(10,3,$row['identificacion'],0,0,'C',1);
    $pdf->Cell(6,3,$row['empresa'],0,0,'C',1);
    $pdf->Cell(12,3,$row['tarjeta'],0,0,'C',1);
    $pdf->Cell(3,3,$row['cable_hdmi'],0,0,'C',1);
    $pdf->Cell(10.5,3,$row['cable_av'],0,0,'C',1);
    $pdf->Cell(1.9,3,$row['fuente'],0,0,'C',1);
    $pdf->Cell(8.9,3,$row['control_1'],0,0,'C',1);
    $pdf->Cell(8.5,3,$row['otrosaccesorios'],0,0,'C',1);
   
   
    $pdf->Ln(3.5);

// proximo hash 

}


}


else {
    echo "<div class='container'><div class='alert alert-info'>¡Consulta Incorrecta! ¡Intente nuevamente!</div></div>";
 }
 $pdf->Output();
}

 


?>