<?php

include 'db.php';
$id=$_GET['id'];

$result=mysqli_query($con,"SELECT app_type,name,address,pan,email,phone,gender,dob,district,issue_date FROM `registration` where r_id=$id ") or die(mysqli_error($con));



 include('pdf_mc_table.php');
$pdf = new PDF_MC_TABLE();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);	
$pdf->Cell(176, 5, 'Application Details', 0, 0, 'C');
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();	
$r=mysqli_fetch_array($result);
$pdf->SetFont('Arial','',12);	

$pdf->Cell(0,12,'Name : '.$r['name'],0,1);
$pdf->Cell(0,12,'Address : '.$r['address'],0,1);
$pdf->Cell(0,12,'Pancard : '.$r['pan'],0,1);
$pdf->Cell(0,12,'email : '.$r['email'],0,1);
$pdf->Cell(0,12,'phone : '.$r['phone'],0,1);
$pdf->Cell(0,12,'gender : '.$r['gender'],0,1);
$pdf->Cell(0,12,'dob : '.$r['dob'],0,1);
$pdf->Cell(0,12,'District : '.$r['district'],0,1);
$pdf->Cell(0,12,'Application : '.$r['app_type'],0,1);
$pdf->Cell(0,12,'Application Date : '.$r['issue_date'],0,1);


$pdf->Output();
?>