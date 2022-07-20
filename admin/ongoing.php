<?php 
ob_start();
include './db.php';
 $id= $_SESSION['r_id'];

  $qkl=  mysqli_query($con, "select *from registration where r_id='$id'");
  $rm=  mysqli_fetch_array($qkl);
  $st_name=$rm['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

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

                   
 
                            <h3 align="center" style="color:blue;"><strong>View Ongoing Projects</strong></h3>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                           
  <table border="1" style="width: 100%">
                                            <tr style="color: black;">
                                               <th>ID</th>
                                               <th>OderNo</th>
                                                 <th>Asset Type</th>
                                                  <th>Division</th>
                                                   <th>Sub Division</th>
<th>District</th>
                                        <th>Tender Title</th>
                                       <th>Contractor Name</th>
                                          <th>Work Status</th>
                                        <th> Work progress</th>
                                         
                                        <th>Date Of Completion</th>
                                              
                                            </tr>
                                            <?php
                                           
         $qj=  mysqli_query($con, "select * from work_progress where status_work='working on it'");
                $i=1;                             
          while($r1=  mysqli_fetch_array($qj))
                                            {
               $tid=$r1['tender_id'];
               $qlo=  mysqli_query($con, "select *from tender where Id='$tid'");
              $r11=  mysqli_fetch_array($qlo);
               
 $uma=$r1['r_id'];

$qss=  mysqli_query($con, "select * from registration where r_id='$uma'");
              $r55=mysqli_fetch_array($qss);
               
              
          ?>
                                          
                                            <tr><td><?php echo $i;?></td><td><?php echo $r11['oder_no'];?></td>
                                                <td><?php echo $r11['Type'];?></td>
                                                 <td><?php echo $r11['division'];?></td>
                                                  <td><?php echo $r11['sub_division'];?></td>
                                                 <td><?php echo $r11['district'];?></td> 
                                                   <td><?php echo $r11['Title'];?></td>
                                                    <td><?php echo $r55['name'];?></td>
                                                   <td><?php echo $r1['status_work'];?></td>
                                                  <td><?php echo $r1['percentage'];?></td> 
                                                  
                                                  <td><?php echo $r1['period_complete'];?></td> 
                                                  
                                            </tr>
                                             <?php 
                                             $i++;
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