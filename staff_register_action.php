  <?php
  include 'db.php';
  
    $app=$_POST['app'];
    
  //echo $name;
   $name=$_POST['name'];
                        $address=$_POST['address'];
                        $email=$_POST['email'];
                        $phn=$_POST['phn'];
                        $district=$_POST['district'];
                      $gender=$_POST['gender'];
                      $pan=$_POST['pan'];
                      $dob=$_POST['dob'];
                        $pwd=$_POST['pwd'];
  $confirm=$_POST['confirm'];
  $img=$_FILES["img"]["name"];
 $proof=$_FILES["proof"]["name"];
  $sign=$_FILES["sign"]["name"];
  $edu1=$_FILES["edu1"]["name"];
 $edu2=$_FILES["edu2"]["name"];

  $edu3=$_FILES["edu3"]["name"];
 $exp=$_FILES["exp"]["name"];
 $user_check_query = "SELECT * FROM registration WHERE phone='$phn' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['phone'] === $phn) {
   
      header("Location: Staff_register.php?alert=Phone number already exists..");
    }

    if ($user['email'] === $email) {
    
      header("Location: Staff_register.php?alert=Email already exists..");
    }
  }

    else
    {

      $date=date("d-m-y");
      
        move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
        
        move_uploaded_file($_FILES["proof"]["tmp_name"],"upload/".$_FILES["proof"]["name"]);
 move_uploaded_file($_FILES["edu1"]["tmp_name"],"upload/".$_FILES["edu1"]["name"]);
        move_uploaded_file($_FILES["edu2"]["tmp_name"],"upload/".$_FILES["edu2"]["name"]);
         move_uploaded_file($_FILES["edu3"]["tmp_name"],"upload/".$_FILES["edu3"]["name"]);
        move_uploaded_file($_FILES["sign"]["tmp_name"],"upload/".$_FILES["sign"]["name"]);
        move_uploaded_file($_FILES["exp"]["tmp_name"],"upload/".$_FILES["exp"]["name"]);



   $varsql="INSERT INTO `registration`(`app_type`, `name`, `address`, `pan`, `email`, `phone`, `gender`, `dob`, `district`, `image`, `proof`, `education_proof`, `education_proof1`, `education_proof2`, `sign`, `experience`, `issue_date`, `exp_date`, `pass`, `r_status`, `status`) VALUES ('$app','$name','$address','$pan','$email','$phn','$gender','$dob','$district','$img','$proof','$edu1','$edu2','$edu3','$sign','$exp','$date','null','$pwd','pending','staff')";
$varresult=mysqli_query($con,$varsql);
   $z=mysqli_insert_id($con);
  $varsql1=mysqli_query($con,"INSERT INTO `login`(`email`, `pass`, `role_id`,`r_id`, `status`) 
  VALUES ('$email','$pwd','staff','$z','1')");

   header("Location: staff_register.php?alert=Successfully Register You Can Login Now..");
  
   
       }
      
    
?>