<?php
include './db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];


$qy="update qutation set Tender='Approved' where Id='$iid'";

    $qyy=mysqli_query($con,$qy);
    //$qh=  mysqli_query($con, "update qutation set Tender='Approved' where Id!='$iid'");
  //header("location:viewtender1.php");
     echo "<script>location='viewtender4.php?show=Quotation is Approved Successfully......!'</script>";

    } 
ob_flush();
?>
