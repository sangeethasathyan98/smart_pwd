<?php 
ob_start();
include 'db.php';
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

                   
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>View Updated Work status and site inspection Details </strong></h6>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                           
   <table border="1" style="width: 100%">
                                            
                                        <th>stage</th>
                                        <th>description</th>
                                          <th>status_work</th>
                                        <th>percentage</th>
                                         
                                        <th>Date Of Completion</th>
                                        <th> Work Images</th>
                                         <th>Site Verification Status</th>
                                         
                                        <th>Progress</th>
                                                 <th>Action</th>
                                            </tr>
                                            <?php
                                           
         $qj=  mysqli_query($con, "select *from work_progress where r_id='$uid'");
                                           
          while($r1=  mysqli_fetch_array($qj))
                                            {
               $tid=$r1['tender_id'];
               $wid=$r1['work_id'];

               $qlo=  mysqli_query($con, "select *from tender where Id='$tid'");
              $r11=  mysqli_fetch_array($qlo);
            $ql=  mysqli_query($con, "select * from qutation where Tender='Approved' and Tenderid='$tid'");
                            $r4=  mysqli_fetch_array($ql);
                $qloo=  mysqli_query($con, "select * from  site_inspection where work_id='$wid'");
              $r12=  mysqli_fetch_array($qloo); 
              
          ?>
                                          
                                           
                                                  <td><?php echo $r1['stage'];?></td>
                                                  <td><?php echo $r1['description'];?></td> 
                                                   <td><?php echo $r1['status_work'];?></td>
                                                  <td><?php echo $r1['percentage'];?></td> 
                                                 
                                                  <td><?php echo $r1['period_complete'];?></td> 
                                                  <td><a class="btn-light btn" target="_blank" href="../upload/<?php echo $r1['img']; ?>">view</a></td> 
                                                  <td><?php echo $r12['site_Status'];?></td> 
                                                  
                                                  <td><?php echo $r12['percentage'];?></td> 
                                                  <?php 
                                                  if($r1['staff_verified']=='Stage 4')
                                                  {
                                                      ?>
                                                  <td><a class="btn-info btn" href="payment_request.php?id=<?php echo $r1['work_id'];?>&tenderid=<?php echo $r1['tender_id'];?>&quotation=<?php echo $r4['Id']; ?>&Amount=<?php echo $r4['Amount'];?>">Payment Request</a></td>  
                                                  <?php 
                                                  }
                                                  else 
                                                  {
                                                  ?>
                                                  <td><a class="btn btn-primary disabled" href="#">Payment Request</a></td>
                                                  <?php 
                                                  }
                                                  ?>
<!--                                                  <td><a class="btn btn-primary" href="viewsite_inspection.php?id=<?php echo $r1['work_id'];?>">View Site Inspection</a></td>-->
                                              
                                            </tr>
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