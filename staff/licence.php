<?php
include './db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$j=$_GET['j'];
 
if($j=='0')
{
   
$qy="update renewal set status='Approved' where renew_id='$iid'";

    $qyy=mysqli_query($con,$qy);
   
  header("location:viewrequest.php");
}
if ($j=='1')
{
    $qy1="update renewal set status='Reject' where renew_id='$iid'";
    $qyy1=mysqli_query($con,$qy1);
   
    header("location:viewrequest.php");
 }
    } 
ob_flush();
?>
