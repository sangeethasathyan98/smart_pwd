<?php
ob_start();
include 'db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="update qutation set Tender='Reject' where Id='$iid'";;
            $qr2=mysqli_query($con,$qr1);
            if($qr2)
            {
           // header("location:viewtender1.php?d=1");
                 echo "<script>location='viewtender3.php?show=Quotation is Rejected......!'</script>";
        }
        else 
        {
        	echo '<script>alert("Can not delete..!!!");</script>';
        }
        }
ob_flush();
?>
