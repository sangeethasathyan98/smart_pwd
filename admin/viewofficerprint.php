<?php
ob_start();
include "db.php";
//$ur= $_SESSION['username'];
$id= $_SESSION['r_id'];



 $qr="select  *from registration where status='staff' and r_id='$id'";
         
           
        
?>
<html>
    <head>
        
    </head>
    <body>
    <center><h2> Application Details</h2></center> 
    <center>
    <form method="post" action="">
         <?php 
           $qr="select  *from registration where status='staff'  order by r_id desc";
         
            $qrr=  mysqli_query($con,$qr);
       
            while($r=mysqli_fetch_array($qrr))
            {
              $did=$r['district'];
             
              $qr1=  mysqli_query($con, "select * from district where Id='$did'");
              $r1=mysqli_fetch_array($qr1);
             }

              ?>
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" class="form-control"  value="<?php echo $r['app_type'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Email</td>
                <td><input type="text" class="form-control"  value="<?php echo $r['email'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Contact No</td>
                <td><input type="text" class="form-control"  value="<?php echo $r['phone'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td>Amount</td>
                <td><input type="text" class="form-control"  value="200" readonly="" ></td>
            </tr>
             <tr>
                <td>Appointment Date</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Adate'];?>" readonly="" ></td>
            </tr>
              <tr>
                <td>Appointment Time</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Atime'];?>" readonly="" ></td>
            </tr>
              <tr>
                <td>Message</td>
                <td><input type="text" class="form-control"  value="<?php echo $r11['Reply'];?>" readonly="" ></td>
            </tr>
             <tr>
                <td></td>
                <td><button onclick="window.print()"  ></button></td>
            </tr>
        </table>
    </form>
    </center>
    </body>
</html>