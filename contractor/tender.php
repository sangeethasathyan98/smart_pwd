<?php 
ob_start();
include 'db.php';
$uid=$_SESSION['r_id'];
$umail=$_SESSION['email'];

$id=$_GET['id'];
 $qm=  mysqli_query($con, "select *from tender where Id='$id'");
 $r2=  mysqli_fetch_array($qm);
  $qmm=  mysqli_query($con, "select *from registration where r_id='$uid'");
 $r3=  mysqli_fetch_array($qmm);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contractor- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<script type="text/javascript">
  
  
  
  function doSubmit()
  {
   
    
    
    if(document.getElementById('complaint').value == "")
    {
      alert("Please Enter quotation Details");
      document.getElementById("form2").name.focus();
    }
   
  }
    </script>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                    </div>
 <div><a  href="viewtender.php">Back</a></div>
                   
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Submitt Quotation</strong></h6>
                        </div>

                       <div align="center" style="color:red; text-align: center;"><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></div>
                   
    
                 
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                           
   <form class="form-contact contact_form" action="" onSubmit="doSubmit()" method="post" id="contactForm" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"  readonly=""  value="<?php echo $umail;?>">   
                                    </div>
                                </div>
                               <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="tid" id="name" type="text"  readonly=""  value="<?php echo $r2['Title'];?>">   
                                    </div>
                                   
                                </div>
                                  <!--<div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="amount" id="amount" type="text"  readonly=""  value="<?php echo $r2['t_amount'];?>">   
                                    </div>-->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="amt" id="amt" type="text"  placeholder="Enter your estimated Amount" onchange="return Validat();" required>
                                        <span id="msg4" style="color:red;"></span>
      
<script>
function Validat() 
{
    var val = document.getElementById('amt').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed ";
  
    
                document.getElementById('amt').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
                                    </div>
                                </div>
                             <div class="col-12">
                                    <div class="form-group">
                                     <textarea class="form-control" name="complaint" id="complaint"    placeholder="Enter your Description" required></textarea>   
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-style btn-primary" name="submit">SUBMIT</button>
                            </div>
                        </form>
                             <?php
                    if(isset($_POST['submit']))
                    {
                        $amt=$_POST['amt'];
                             $complaint=$_POST['complaint']; 
$qdf=  mysqli_query($con, "select *from qutation where Userid='$umail' and Tenderid='$id'");
      $n1=  mysqli_num_rows($qdf);
      if($n1>=1)
      {
          echo '<script>alert("You Already submitt quotation...");
              window.location.href="viewtender.php";</script>';
      }
      else
      {   
        

                        $qr=mysqli_query($con,"
                            INSERT INTO `qutation`(`r_id`, `Userid`, `Tenderid`, `Amount`, `Tender`, `Proof`, `Description`, `Des`) VALUES ('$uid','$umail','$id','$amt','Pending','null','$complaint','null')");
                        
                        if($qr)
                        {
                            //echo "<script>alert('Successfully Registered!');window.location.href='viewtender.php';</script>";
                             //header('location:viewtender.php');
                            echo "<script>location='viewtender.php?alert=DATA IS ADDED SUCCESSFULLY......!'</script>";
                        }                   
                    }}
                
                    ?>
                        </div>
                    </div>



</div>



                                                
                      </table>
    </div>
<!-- script-for sticky-nav -->
                        </table>
                            </div>
                        </div>
                    </div>

                </div>




                   <br>
            </div>
            <!-- End of Main Content -->


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