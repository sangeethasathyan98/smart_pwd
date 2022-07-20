<?php 
ob_start();
include './db.php';
$uid=$_SESSION['r_id'];
$umail=$_SESSION['email'];
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

                   
 
                            <h5 align="center" style="color:blue;"><strong>View License Details</strong></h5><br>
                        
                                           
  <table border="1" align="center" style="width: 90%">  <?php
                                           
          $qj=  mysqli_query($con, "select *from registration where r_id='$uid'");
          while($r1=  mysqli_fetch_array($qj))
                                            {

 
             
              $qr1=  mysqli_query($con, "select * from district");
              $r2=mysqli_fetch_array($qr1);
               
          ?>
                                            <tr> <th>Application type</th>
<td><?php echo $r1['app_type'];?></td> 
                                            </tr>
                                               <tr> <th>Name Of The Applicant</th>  <td><?php echo $r1['name'];?></td> </tr>
                                               <tr> <th>Address of The Applicant</th>  <td><?php echo $r1['address'];?></td> </tr>
<tr> <th>District</th>  <td><?php echo $r2['District'];?></td> </tr>

                                                 <tr><th>Gender</th>
                                                    <td><?php echo $r1['gender'];?></td> </tr>
                                                <tr> <th>DOB</th> <td><?php echo $r1['dob'];?></td></tr>
                                               <tr>    <th>Email</th> <td><?php echo $r1['email'];?></td> </tr>
                                                   <tr> <th>Phone</th> <td><?php echo $r1['phone'];?></td></tr> 
                                                   <tr> <th>Pan Card</th>  <td><?php echo $r1['pan'];?></td></tr> 
                                                    <tr> <th>Do You Have Any Experience</th>  <td><?php echo $r1['experience'];?></td></tr> 
                                              <tr>  <th>issue date</th>  <td><?php echo $r1['issue_date'];?></td> </tr>
                                               <tr> <th>Expiration date</th>     <td><?php echo $r1['exp_date'];?></td></tr>
                                              
                                           
                                           
                                                  
                                                   
                                            
                                             <?php 
                                 }
                                ?>
                                        </table>  
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

            <!-- Footer -->
           
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