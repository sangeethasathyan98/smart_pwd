<?php 
ob_start();
include 'db.php';
$umail=$_SESSION['email'];
$id=$_SESSION['r_id'];
 $qm=  mysqli_query($con, "select * from tbl_plan ");
 $r1=  mysqli_fetch_array($qm);
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Executive Officer Dashboard</title>

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
              <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                    </div>

                   
   <div class="w3l-table-info" style="overflow-x: auto;">
                    <br>
                   
                            <h4 align="center" style="color:blue;"><strong>View Tender Sketch and plans</strong></h4><br>
                     <br>
            <table id="table" border="1" width="90%">
            <thead>
              <tr>
                <th>Id</th>
                  <th>Tender oder name</th>
                <th>Asset Type</th>
               
                <th>District</th>
                   <th>Tender Title</th>
                <th>Engineer Name</th>
                <th>Engineer Email</th>
                   <th>Engineer Phone</th>
                
                 <th>Tender Plan Proof</th>
                 <th>Status</th>
                 
                   <th>Action</th>                      
              </tr>
            </thead>
            <tbody>
            
             <?php
                                                 
                                                  $qr="select * from tbl_plan";
                                                  
                                                  
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))

{

              $qr1=  mysqli_query($con, "select * from tbl_assignengineer ");
              $r1=mysqli_fetch_array($qr1); 
               
              $tid=$r['Id'];
               $ttid=$r['r_id'];
              $qr11=  mysqli_query($con, "select * from tender where Id='$tid'");
              $r11=mysqli_fetch_array($qr11); 
                $qr12=  mysqli_query($con, "select * from registration where r_id='$ttid'");
              $r12=mysqli_fetch_array($qr12);
                ?>
              <tr>
                <form name="f1" method="post" action="">
                  <td><?php echo $i;?></td>
                         <td><?php echo $r11['oder_no']; ?></td> 
                  <td><?php echo $r11['Type']; ?></td> 
                     <td><?php echo $r11['district']; ?></td>
                        <td><?php echo $r11['Title']; ?></td>  
                <td><?php echo $r12['name']; ?></td> 
                 <td><?php echo $r12['email']; ?></td>
               <td><?php echo $r12['phone']; ?></td>
                
                  <td><a class="btn-light btn" target="_blank" href="../upload/<?php echo $r['Proof']; ?>">view</a></td>
                   <td><?php echo $r['status']; ?></td>
              
                  <td>   <a class="btn-success btn" href="plan_active.php?id=<?php echo $r['plan_id'];?>">Verify</a>&nbsp;  <a class="btn-danger btn" href="plan_rejected.php?id=<?php echo $r['plan_id'];?>">Reject</a>          </td>

                
               

               
                    </form>  
                  </tr>
                  <?php

                  $i++;
                }
                ?>


              </tbody>  

            </table>
        </div>
    </div>
</div>
</div>
    </div>
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