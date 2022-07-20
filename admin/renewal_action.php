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
                      $uid=$_POST['uid'];
                       $idat=$_POST['idat'];
  $img=$_FILES["img"]["name"];

      $date=date("d-m-y");
        move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
 echo  $varsql="INSERT INTO `renewal`(`r_id`, `app_type`, `name`, `address`, `gender`, `dob`, `pancard`, `district`, `email`,`phone`, `image`, `issue_date`, `renewal_date`, `status`) VALUES ('$uid','$app','$name','$address','$gender','$dob','$pan','$district','$email','$phn','$img','$idat','$date','pending')";

     
   $varresult=mysqli_query($con,$varsql);

  
  header("Location: renewalrequest.php?alert=Renewal request is send ");
  
   
     
    
?>