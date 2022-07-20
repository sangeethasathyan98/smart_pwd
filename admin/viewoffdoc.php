<?Php
include('db.php');
require('fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);



class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'OutPass',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
 $id=$_SESSION['r_id'];
//$Oid=$_GET['Oid'];
$outpass = mysqli_query($con, "SELECT app_type,name,address,pan,email,phone FROM registration where r_id='$id'" );
$r=mysqli_fetch_assoc($outpass);

    $pdf->Cell(0,10,'Name'. $r['app_type'],0,1);
    $pdf->Cell(0,10,'Address'.$r['name'],0,1);
    $pdf->Cell(0,10,'Phone'. $r['address'],0,1);
    $pdf->Cell(0,10,'Purpose'. $r['pan'],0,1);
    $pdf->Cell(0,10,'Leaving date'. $r['email'],0,1);
    $pdf->Cell(0,10,'Return date'. $r['phone'],0,1);
$pdf->Output('my_file.pdf','I');
?>

