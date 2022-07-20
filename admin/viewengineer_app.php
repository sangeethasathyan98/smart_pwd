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
$row=mysqli_fetch_array($result);
$pdf->SetFont('Arial','',12);	

$pdf->Cell(0,12,'Name of Company /Firm : '. $row['name'],0,1);
$pdf->Cell(0,12,'Gender : '. $row['gender'],0,1);
$pdf->Cell(0,12,'DOB : '. $row['dob'],0,1);
$pdf->Cell(0,12,'Address : '. $row['address'],0,1);
$pdf->Cell(0,12,'Pancard Number : '. $row['pan'],0,1);
$pdf->Cell(0,12,'Email : '. $row['email'],0,1);
$pdf->Cell(0,12,'Phone : '. $row['phone'],0,1);
$pdf->Cell(0,12,'Gender : '. $row['gender'],0,1);
$pdf->Cell(0,12,'Education Qualification : '. $row['app_type'],0,1);
$pdf->Cell(0,12,'District : '. $row['district'],0,1);
$pdf->Cell(0,12,'Application Date : '. $row['issue_date'],0,1);


$pdf->Output();
?>