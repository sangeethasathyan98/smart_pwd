<?php
include './db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$j=$_GET['j'];
 $sq = mysqli_query($con,"SELECT email from registration WHERE r_id='$iid'");
$sw = mysqli_fetch_assoc($sq);
$email = $sw['email'];
 
if($j=='0')
{
$qy="update registration set r_status='Approved' where r_id='$iid'";

    $qyy=mysqli_query($con,$qy);
    header("location:../src/verifymail1.php?email=$email");
 // header("location:viewusers.php");
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
