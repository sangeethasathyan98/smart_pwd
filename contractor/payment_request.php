<?php 
ob_start();
include 'db.php';
$uid=$_SESSION['r_id'];
$umail=$_SESSION['email'];
$work_id=$_GET['id'];
$tenderid=$_GET['tenderid'];
$quotation=$_GET['quotation'];
$Amount=$_GET['Amount'];

$qdf=  mysqli_query($con, "select * from payment where Uid='$umail' and Tenderid='$tenderid'");
      $n1=  mysqli_num_rows($qdf);
      if($n1>=1)
      {
          echo '<script>alert("You Already submitt payment Request to admin");
              window.location.href="viewwork_status.php";</script>';
      }
      else
      {   


$qr=  mysqli_query($con, "INSERT INTO `payment`(`r_id`, `Work_id`,`qutation_id`,`Tenderid`, `Uid`, `Amount`) VALUES('$uid','$work_id','$quotation','$tenderid','$umail','$Amount')");
echo "<script type=text/javascript>alert('Payment Request sent successfully...!');
window.location='viewwork_status.php';    
</script>";   
ob_flush();
}
?>