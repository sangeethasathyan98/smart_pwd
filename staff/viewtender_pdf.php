<?php

include 'db.php';

  $id=$_GET['id'];

$result=mysqli_query($con,"SELECT oder_no,district,Type,division,sub_division,Title,Rules,t_amount,period_completion,Ldate,bid_open FROM `tender` where Id=$id ") or die(mysqli_error($con));


 include('pdf_mc_table.php');
$pdf = new PDF_MC_TABLE();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);	
$pdf->Cell(176, 5, 'Tender Details', 0, 0, 'C');
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();	
$row=mysqli_fetch_array($result);
$pdf->SetFont('Arial','',12);	
$pdf->Cell(0,12,'Tender Oder No : '. $row['oder_no'],0,1);
$pdf->Cell(0,12,'Asset Type : '. $row['Type'],0,1);
$pdf->Cell(0,12,'Division : '. $row['division'],0,1);

$pdf->Cell(0,12,'Sub Division : '. $row['sub_division'],0,1);
$pdf->Cell(0,12,'District : '. $row['district'],0,1);
$pdf->Cell(0,12,' Tender Title : '. $row['Title'],0,1);
$pdf->Cell(0,12,'Description : '. $row['Rules'],0,1);
$pdf->Cell(0,12,'Tender Amount : '. $row['t_amount'],0,1);
$pdf->Cell(0,12,'Period Of Completion : '. $row['period_completion'],0,1);
$pdf->Cell(0,12,'Last Date For Apply : '. $row['Ldate'],0,1);

$pdf->Cell(0,12,'Bid Opening Date : '. $row['bid_open'],0,1);



$pdf->Output();
?>