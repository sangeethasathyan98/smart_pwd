<?php
ob_start();
include 'db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="update staff set status='0' where staff_id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            if($qr2)
            {
            header("location:addstaff.php?d=1");
        }
        else 
        {
        	echo '<script>alert("Can not block..!!!");</script>';
        }
        }
ob_flush();
?>
