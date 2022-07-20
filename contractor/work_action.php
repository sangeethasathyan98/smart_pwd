  <?php
  session_start();
  include 'db.php';
  
   
                        $category=$_POST['category'];
                        $tender=$_POST['tender'];
                      
                        $engineer=$_POST['engineer'];
                      $id=$_SESSION['r_id'];
                      $tid=$_POST['ttidd'];
   


      $date=date("d-m-y");
      
      $qdf=  mysqli_query($con, "select *from tbl_assignengineer where tender='$tender' and engineer='$engineer'");
      $n1=  mysqli_num_rows($qdf);
      if($n1>=1)
      {
          echo '<script>alert("cannot Select ");
              window.location.href="assign_engineers.php";</script>';
      }
      else
      {      
        
 echo  $varsql="INSERT INTO `tbl_assignengineer`(`Tender_id`, `r_id`, `category`, `tender`, `engineer`, `status`) VALUES('$tid','$id','$category','$tender','$engineer','1')";

     
   $varresult=mysqli_query($con,$varsql);

  
  header("Location: assign_engineers.php?alert=Data Submitted Succesfully ");
      }
   
     
    
?>