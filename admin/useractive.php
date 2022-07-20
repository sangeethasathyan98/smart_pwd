<?php
include './db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$j=$_GET['j'];
 
if($j=='0')
{
$qy="update registration set r_status='Appruve' where r_id='$iid'";

    $qyy=mysqli_query($con,$qy);
  header("location:viewusers.php");
}
if ($j=='1')
{
    $qy1="update registration set r_status='Reject' where r_id='$iid'";
    $qyy1=mysqli_query($con,$qy1);
   
    header("location:viewusers.php");
 }
    } 
ob_flush();
?>
