<?php
//AddPage(orientacion[Portrait, Landscape], tamaño [A3,A4,A5,LETTER,LEGAL]),
//SetFont(tipo[courier, helvetica, arial, times, smbol, zapdingbats], estilo[normal, B, I, U], tamaño),
//Cell(ancho, alto, texto, bordes, ?, alineacion, rellenar, link),
//OutPut(destino[I,D,F,S], nombre_archivo, utf8)
//$fpdf->Image(ruta,posicionx, posiciony,alto,ancho,tipo,link);
//$fpdf->PageNo();
//$fpdf->AliasNoPages();
require('../fpdf/fpdf.php');




class pdf extends FPDF
{

    if(isset($_POST['pdf']))
{ require '../abrir_conexion_cliente.php';
  
$identificacion=$_POST['identificacion'];
$id_orden=$_POST['id_orden'];
$acentos = $conn->query("SET NAMES 'utf8'");  
$productos ="SELECT empresa,serie,tarjeta,direccion,cable_hdmi,cable_av,fuente,control_1,id_orden,identificacion,nombre_cliente,horario_rec,password_rec,id_recolector_2 FROM express WHERE id_orden = '$id_orden' and identificacion='$identificacion'";
$acentos = $conn->query("SET NAMES 'utf8'");
$result = $conn->query($productos);
if (mysqli_affected_rows($conn)>0){
    
if($productos2= $result->fetch_array())
{

    public function header ()
    {
       $this->SetFont('Arial','B',10);
       $this->Image('../img/logo.png',5, 6, 20);
       $this->Image('https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=8A6E8X97M4EKK5992482619NUMBE.png',190,5,20,20);
    }

    public function footer()
    {
        $this->SetFont('Arial','B',10);
        $this->SetY(270);
        $this->Write(5,'Pie de pagina Esteban Echeverria');
        $this->SetX(190);
        $this->Write(5, $this->PageNo());
    }
}

$fpdf = new pdf();
$fpdf->AddPage('portrait','A4');
$fpdf->SetFont('Arial','B',14);
$fpdf->SetY(30);
$fpdf->Cell(0,5,'Remito Express Cliente ',0,0,'C');
$fpdf->SetLineWidth(2);
$fpdf->SetDrawColor(61,174,233);
$fpdf->Line(65, $fpdf->GetY() + 10, 140, $fpdf->GetY() +10);

$fpdf->Ln(20);

$fpdf->SetFont('Arial','',12);

$fpdf->Cell(20, 5, 'Nro Cliente: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Nombre Cliente: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Nro. Orden: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Direccion: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Fecha: ');
$fpdf->Ln(20);


//SetFillColor()
//SetDrawColor()

$fpdf->SetFontSize(10);
$fpdf->SetFont('Arial','B');
$fpdf->SetFillColor(255,255,255);
$fpdf->SetTextColor(40,40,40);
$fpdf->SetDrawColor(88,88,88);
$fpdf->Cell(20, 10, 'Serie',0,0,'C',1);
$fpdf->Cell(35, 10, 'Tarjeta',0,0,'C',1);
$fpdf->Cell(30, 10, 'Cable HDMI',0,0,'C',1);
$fpdf->Cell(30, 10, 'Cable AV',0,0,'C',1);
$fpdf->Cell(30, 10, 'Fuente',0,0,'C',1);
$fpdf->Cell(30, 10, 'Control',0,0,'C',1);
$fpdf->SetDrawColor(61,174,233);
$fpdf->SetLineWidth(1);
$fpdf->Line(15,101, 190, 101);
$fpdf->SetTextColor(0,0,0);
}


while($productos2= $result->fetch_array())
{




$pdf->SetFont('Arial','',3);
$pdf->Cell(-9.5,6,'',0,0,'L');
$pdf->Cell(15,7,$productos2['serie'],0);
$pdf->Cell(18,7,$productos2['tarjeta'],0);
$pdf->Cell(13,7,$productos2['cable_hdmi'],0);
$pdf->Cell(11,7,$productos2['cable_av'],0);
$pdf->Cell(11,7,$productos2['fuente'],0);
$pdf->Cell(11,7,$productos2['control_1'],0);


$pdf->Ln(3);

// proximo hash 










           

}

}


else {
echo "<div class='container'><div class='alert alert-info'>¡Consulta Incorrecta! ¡Intente nuevamente!</div></div>";
}



$fpdf->Output();