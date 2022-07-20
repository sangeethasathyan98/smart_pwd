<?php
ob_start();
include 'db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from category where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            if($qr2)
            {
            header("location:addcategory.php?d=1");
        }
        else 
        {
        	echo '<script>alert("Can not delete... officers exist!!!");</script>';
            // echo "<script>location='addcategory.php?show=DATA IS deleted SUCCESSFULLY......!'</script>";
        }
        }
ob_flush();
?>
