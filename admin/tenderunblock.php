<?php
ob_start();
include 'db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="update tender set Status='1' where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            if($qr2)
            {
            //header("location:addtender.php?d=1");
                 echo "<script>location='addtenderview1.php?show= UNBLOCKED SUCCESSFULLY......!'</script>";
        }
        else 
        {
        	echo '<script>alert("Can not block!!!");</script>';
            
        }
        }
ob_flush();
?>
