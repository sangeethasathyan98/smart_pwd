<?php
ob_start();
include 'db.php';

 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN- Dashboard</title>

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

                  

 
                    
                   <div align="center" style="color:red; text-align: center;"><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></div>
                       
                              
               
               <div class="w3l-table-info" style="overflow-x: auto;">
                      <h2 align="center">View Payment Request</h2>
                                          
                                          <table id="table" border="1" >
                        <thead>
                          <tr>
                            <th>Id</th><th>Tender Order No</th>
                                       <th>Asset Type</th>
                                       <th>Division</th>         
                                                          <th>Sub Division</th>
                                          
                                                       <th>District</th>
                                                     <th> Tender Title</th> 
                                                         <th>Contractor Name</th> 
                                                         <th>Contractor Email</th>
                                                          <th>Contractor Phone</th>
                                                          <th>Amount</th>
                                                         
                                                          <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>








                          <?php
                                                 
                                                  $qr="select * from payment order by Id desc";
                                                  
                                                  
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                      
                             $w=$r['Tenderid'];
                                             
                             $qlow=  mysqli_query($con, "select *from tender where Id='$w'");
                            $r2=  mysqli_fetch_array($qlow);
             $amt=$r2['t_amount'];
              $id=$r['r_id'];
               $ql=  mysqli_query($con, "select * from qutation where Tender='Approved' and Tenderid='$w'");
                            $r4=  mysqli_fetch_array($ql);
     $qlo=  mysqli_query($con, "select *from registration where r_id='$id'");
                            $r3=  mysqli_fetch_array($qlo);
                                                  ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                     <td><?php echo $r2['oder_no'];?></td>
                     <td><?php echo $r2['Type'];?></td>
                     <td><?php echo $r2['division'];?></td>
                      <td><?php echo $r2['sub_division'];?></td>
                     <td><?php echo $r2['district'];?></td>
                      <td><?php echo $r2['Title'];?></td>
                      <td><?php echo $r3['name'];?></td>
                                                   
                                    <td><?php echo $r['Uid'];?></td>
                                     <td><?php echo $r3['phone'];?></td>  
                                                          <td><?php echo $r4['Amount'];?></td>
                                                        <td><a href="paymentgateway.php?id=<?php echo $r['Id'];?>&id=<?php echo $id;?>" class="btn-info btn">Payment</a>
                                                  </td>
                             
                            
                                                          </form>  
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
                        
               
                                           </tbody>  
                                                
    
            <!-- End of Main Content -->

          
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