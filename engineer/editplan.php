<?php 
ob_start();
//session_start();
include 'db.php';
$um=$_SESSION['r_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Engineer Dashboard</title>

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
               
                    <p style="margin-left:20px;"><a  href="viewtender.php">Back To Tender Details</a></p>
                 
                  
 
                           
                       <section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" >
                 
                  
          <div class="card-body p-5 text-center">

            <h3 class="mb-5" style="color:blue;">Upload Tender Plan</h3>

 <form   method="post"  id="contactForm" enctype="multipart/form-data">

    <div > <div align="center" style="color:red;"><?php
    if(isset($_GET['alert'])) echo $_GET['alert'];
    ?></div>
    <div class="form-outline mb-4"> <label class="form-label"  style="color: black; font: bold;"></label>
             <input class="form-control " name="img" id="img" type="file"  placeholder="" required onchange="return filevalids();">
                 <span id="msg14" style="color:red;"></span>
            
<script>
function filevalids() 
{
    var val = document.getElementById('img').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.doc|.docx|.pdf)$/)) 
    {
        document.getElementById('msg14').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('img').value = "";
        return false;
    }
document.getElementById('msg14').innerHTML=" ";
    return true;
}

</script>    
            </div>               
            <button class="btn btn-primary btn-lg btn-block" name="s1" type="submit">Submitt To verify</button>

           </form> 

          </div>
        </div>
      </div>
    </div>

  </div>
</section>

  <?php

if(isset($_POST["s1"]))
{
  $plan_id=$_GET["plan_id"];
    $img=$_FILES["img"]["name"];
   
     move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
      
   
    $query="update tbl_plan set proof='$img' where plan_id=$plan_id";

  $result=mysqli_query($con,$query);
  
  if($result)
  {
 echo "<script>location='viewplan.php?alert=Update SUCCESSFULLY......!'</script>";
  
  }
}
?>
   


    </div>
 
    </div>
 
</div>



                       
    </div>
<!-- script-for sticky-nav -->
                        </table>
                            </div>
                        </div>
                    </div>

                </div>




                   <br>
            </div>
           
        </div>
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
