<?php 
ob_start();
include 'db.php';
$uid=$_SESSION['r_id'];

$id=$_GET['id'];
 $qm=  mysqli_query($con, "select * from tender where Id='$id'");
 $r2=  mysqli_fetch_array($qm);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
      <?php 
      include './sidebar.php';
      ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              <?php 
      include './header.php';
              ?>
                <!-- End of Topbar -->

               
                    <!-- Page Heading -->
                  

                  <h5><a  href="work_pro.php">Back to home </a> </h5>


           <section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5" style="color:blue;">WORK Progress Updates</h3>
            <form method="post" action="" enctype="multipart/form-data">
            <div class="form-outline mb-4"> <label class="form-label" style="color: black; font: bold;">Stages</label>
            
              <select   class="form-control"  id="stage" name="stage" required>
                                         <option value="individual"  >select</option>
  <option value="Stage 1" >Stage 1</option>
  <option value="Stage 2" >Stage 2</option>
  <option value="Stage 3" >Stage 3</option>
  <option value="Stage 4" >Stage 4</option>
 
</select>
            </div>
 <div class="form-outline mb-4">  
     <label class="form-label" style="color: black; font: bold;" >Description</label>
              <input type="text" id="des" name="des" class="form-control" />
          </div>

              <div class="form-outline mb-4"> <label class="form-label"  style="color: black; font: bold;">Status Of the work</label>
            
              <select   class="form-control"  id="w_status" name="w_status" required>
                     <option value="" >select</option>
  <option value="Completed" >Completed</option>
  <option value="Working on it" >Working On it</option>
  <option value="Stuck" >Stuck</option>
</select>
            </div>
             <div class="form-outline mb-4"> <label class="form-label" style="color: black; font: bold;" >Percentage Of Work</label>
            
              <select   class="form-control"  id="percentage" name="percentage" required>
                                         <option value="individual" >select</option>
  <option value="10%" >10%</option>
  <option value="20%" >20%</option>
  <option value="30%" >30%</option>
   <option value="40%" >40%</option>
  <option value="50%" >50%</option>
  <option value="60%" >60%</option>
  <option value="70%" >70%</option>
  <option value="80%" >80%</option>
  <option value="90%" >90%</option>
  <option value="100%" >100%</option>
</select>
            </div>
            <div class="form-outline mb-4">  <label class="form-label" for="typePasswordX-2" style="color: black; font: bold;"> Images</label>
               <input type="file" name="img" class="form-control" id="img" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();"/></td>
</tr>
<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
      document.getElementById("file").focus();
      
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>
                            
            </div>

               <div class="form-outline mb-4">  <label class="form-label" for="typePasswordX-2" style="color: black; font: bold;"> Completion Date</label>
              <input type="date" id="time" name="time" class="form-control" required> 
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>"/>

            <button class="btn btn-primary btn-lg btn-block" name="s1" type="submit">Submit To verify</button>

           </form> 

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

if(isset($_POST["s1"]))
{
   
$stage=$_POST['stage'];
$id=$_POST['id'];
$des=$_POST['des'];
$w_status=$_POST['w_status'];
$percentage=$_POST['percentage'];
$img=$_FILES["img"]["name"];
$time=$_POST['time'];
 
 
    
     $dup =mysqli_query($con,"select * from work_progress where tender_id='$id' and stage='$stage'");
     if(mysqli_num_rows($dup)>0)
     {
         echo "<script>alert('This Stage  Is Already Completed......!After verification by Executive Offiver u can upload work status');
             window,location.href='work_pro.php';</script>";
     }
     else
     {
           $date=date("d-m-y");
$qq=mysqli_query($con,"select * from work_progress where r_id='$uid' and tender_id='$id' ");
$r3=  mysqli_fetch_array($qq);
if($n1=  mysqli_num_rows($qq)>=1)
{
    if($r3['stage']==$r3['staff_verified'])
     {
   
}
     else
     {
         echo '<script>alert("After verification by Executive Offiver u can upload work status");</script>';
     }
    
     }
 else {
      
  $q1="INSERT INTO `work_progress`(`r_id`, `tender_id`, `stage`, `description`, `status_work`, `percentage`, `img`, `period_complete`, `date`, `staff_verified`) VALUES('$uid','$id','$stage','$des','$w_status','$percentage','$img','$time','$date','pending')";
     move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);

}
$qr=mysqli_query($con,$q1);

      if($qr)
                        {
             
                echo "<script>window.location.href='work_pro.php';</script>";
}
}
}
?>




                       
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>