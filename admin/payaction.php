<?php
session_start();
include "db.php";
if(isset($_SESSION['email']))
{
 
  
$aid=$_SESSION['email'];
$query="SELECT * FROM login where email ='$aid'";
$res = mysqli_query($con,$query);
$r=mysqli_fetch_array($res);


?>

          <?php
            
   
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');  
    $id=$_SESSION['id'];
     $vid=$_GET['id'];
     $sql = mysqli_query($con, "SELECT tb_tournament.*,tb_booking.* FROM tb_booking join tb_tournament where tb_tournament.trmn_id=tb_booking.trmn_id ");
    while ($r6 = mysqli_fetch_array($sql)) 
    {
        $a=$r6['price'];
       // $i=$r6['pay_status'];
        //$i=$row['pstatus'];
       
    }
    $sql1="INSERT INTO tb_bookingpay(log_id,book_id,tamount,paystatus,date_added) VALUES ('$id','$vid','$a','Paid','$date')";
    mysqli_query($conn,$sql1);
    if (headers_sent()) {
      ?>
    <script>
      alert("Paid Successfully");
      </script>
    <?php
      die('<script type="text/javascript">window.location.href="bill.php?id='.$vid.'" </script>');
    } else {
      header("location:bill.php?id=".$vid."");
      die();
    }   
  
?>
         
<?php 
}           
}
?>