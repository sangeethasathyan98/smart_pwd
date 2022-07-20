  <?php
  include 'db.php';
  
    $app=$_POST['app'];
   
   $name=$_POST['name'];
                        $address=$_POST['address'];
                        $email=$_POST['email'];
                        $phn=$_POST['phn'];
                        $district=$_POST['district'];
                      $gender=$_POST['gender'];
                      $pan=$_POST['pan'];
                      $dob=$_POST['dob'];
                      $id=$_POST['id'];
                       $idat=$_POST['idat'];
                         $eedat=$_POST['eedat'];
  //$img=$_FILES["img"]["name"];
 $id=$_SESSION['r_id'];
   
      $date=date("d-m-y");
      
      $qdf=  mysqli_query($con, "select *from renewal where email='$email'");
      $n1=  mysqli_num_rows($qdf);
      if($n1>=1)
      {
          echo '<script>alert("You Already sent renewal request...");
              window.location.href="renewalrequest.php";</script>';
      }
      else
      {      
        move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
 echo  $varsql="INSERT INTO `renewal`(`r_id`, `app_type`, `name`, `address`, `gender`, `dob`, `pancard`, `district`, `email`,`phone`, `image`, `issue_date`,`exp_date`,`renewal_date`, `status`) VALUES ('$id','$app','$name','$address','$gender','$dob','$pan','$district','$email','$phn','nill','$idat','$eedat','$date','pending')";

     
   $varresult=mysqli_query($con,$varsql);

  
  header("Location: renewalrequest.php?alert=Renewal request is send ");
      }
   
     
    
?>