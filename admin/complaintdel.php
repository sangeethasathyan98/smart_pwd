<?php
ob_start();
include './db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from complaint where complaint_id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            header("location:viewcompliant.php");
        }
ob_flush();
?>
