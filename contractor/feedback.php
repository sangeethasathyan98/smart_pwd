<?php 
ob_start();
include './db.php';
$uid=$_SESSION['r_id'];
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
      alert("Please Enter Feedback");
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

                   
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Add Feedback</strong></h6>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table  id="dataTable" width="50%" cellspacing="0">
                                   

                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                                  <form class="form2 " onSubmit="doSubmit()"   action="" method="POST" id="" novalidate="novalidate" enctype="multipart/form-data">
                           
                            </div>
                                <div class="col-12">
                                    <div class="form-group">
                                     <textarea class="form-control" name="complaint" id="complaint"    placeholder="Enter your Feedback" required></textarea>   
                                    </div>
                                </div>
                               
                                
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="button boxed-btn" name="submit" value="SEND">
                            </div>
                           
                        </form>

                        </div>
                    </div>


   <?php

                    if(isset($_POST['submit']))
                    {
                        
                         
                        $complaint=$_POST['complaint']; 
                     $qr1=mysqli_query($con,"insert into feedback(r_id,Feedback,Reply) values('$uid','$complaint','pending......')");
                      if($qr1)
                        {
                          echo '<script>alert("Feedback Registered Successfully!!");</script>';
                        }
                    }
                    ?>
              <!-- <form class="form-contact " action="" method="POST" id="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="row">
                                 <?php 
                                 $qj= mysqli_query($con, "select *from feedback where r_id='$uid'");
                                 ?>
                           <div class="col-12">
                                    <div class="form-group">
                                        <table border="1" style="width: 100%;">
                                            <tr>
                                               
                                                <th>Feedback</th>
                                                <th>Reply</th>
                                            </tr>
                                            <?php 
                                            while ($r6=mysqli_fetch_array($qj))
                                 {
                                            ?>
                                            <tr>
                                            
                                                  <td><?php echo $r6['Feedback'];?></td> 
                                                    <td><?php echo $r6['Reply'];?></td> 
                                            </tr>
                                             <?php 
                                 }
                                ?>
                                        </table>  
                                    </div>
                                </div>    
                              
                            </div>
                         
                           
                        </form>-->


    






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

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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